<?php 
    session_start();

    include("connection.php");

    if(!isset($_SESSION["tutor_name"])){
        header("location: tutorlogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css-reset.css">
   
</head>

<style>
*{
    margin:0;
    padding: 0;
}
.header-container{
    background-color: rgb(22, 22, 22);
    min-height: 100px;
    position: fixed;
    width: 100%;
    margin-left: 0;
}

header{
    background-color: rgb(22, 22, 22);
    min-height: 100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo{
    margin-right: 0; 
    margin-top: 0;
}

.mybutton{
    color:white;
    padding: 10px 25px;
    text-decoration: none;
}

.mybutton:hover{
    background-color: rgb(11, 202, 139);
}

.sidenav {
  height: 100%;
  width: 0%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 20px 8px 20px 28px;
  text-decoration: none;
  font-size: 18px;
  color: #818181;
  display: block;
  transition: 0.3s;
  /* margin-top: 20px; */
}

.sidenav a:hover {
  color: #f1f1f1;
  background-color: rgb(11, 202, 139);
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-top: 20px;
  padding-left: 10px;
  padding: 1px 10px;
}

.openbtn:hover{
    background-color: rgb(11, 202, 139);
}

.management {
    margin-top: 80px;
}

.container{
    min-height: 780px;
    background-color: rgb(146, 183, 250);
    min-width: 1024px;
}

.r1wrap{
    max-width: 1024px;
    min-height: 100px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-top: 50px;
  
}

.r2wrap{
    max-width: 1024px;
    min-height: 100px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    padding-top: 100px;
}

.modal-content{
    z-index:999;
}

.box{
    width: 95%;
    align-items: center;
    min-height: 800px;
    display: relative;
    margin-left: 40px;
    margin-right: 30px;
    background-color: lightgrey;
}

.inbox{
    padding-top:40px;
    padding-left: 50px
}

table{
    text-align:center;
    margin-left: auto;
    margin-right: auto;
    margin-top: 40px;
    /* justify-content: center; */
}

th{
    padding: 20px 30px;
    background-color: rgb(8, 22, 100);
    color: white;
}

td{
    border-bottom: 1px solid #ddd;
    padding: 20px;
}



tr:nth-child(even){
    background-color: skyblue;
}

tr:nth-child(odd){
    background-color: rgb(86, 172, 206);
}

tr:hover{
    background-color: rgb(123, 153, 165);
}

td a{
    text-decoration: none;
    padding: 5px 15px;
    border-radius: 15px 15px;
    background-color: violet;
    color:white;
}
td a:hover{
    background-color: darkviolet;
}

td input[type='submit']{
    border:none;
    padding: 5px 15px;
    margin-top: 10px;
    border-radius: 15px 15px;
}
.edit{
    background-color:green;
    color:white;
}
.edit:hover{
    background-color:darkgreen;
}
.delete{
    background-color:red;
    color: white;
}
.delete:hover{
    background-color:brown;
}


</style>

<body>
    <div class="header-container">
        <header>
            <div class="openbtn">
            <span style="font-size:30px;cursor:pointer;color: aliceblue; padding: 5px;margin-left: 20px;" onclick="openNav()">&#9776;</span>
            </div>
            <div class="logo">
                <a href="./main.html">
                    <img src="./logo.png" alt="" style="width: 180px;">
                </a>
                <span style="color: violet;">Tutor Page</span>
            </div>
            <nav>
                <span style="color:violet; font-size: 18pt;">Welcome, <?php echo($_SESSION['tutor_name'])?></span>
                <a href="./tutor.php" class="mybutton" style="margin-left: 50px;">Dashboard</a>
                <a href="tutorlogout.php" class="mybutton">Log out</a>
            </nav>
        </header>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
           
            <div class="management">
                <a href="add_course_form.php">Create Course</a>
                <a href="tutor.php?personal_details">Personal Details</a>
                <a href="tutor.php?tutor_change_pass_form">Change Password</a>
            </div>
        </div>
    </div>
    <div class="container">

    <?php

        if(!isset($_GET['personal_details']) && !isset($_GET['tutor_change_pass_form'])){ ?>
        
        <br><br><br><br><br><br><br><br>
        <div class="box">
            
            <div class="inbox">
                <h1>Created Course</h1>
                <form action="add_course_form.php" method="post" >            
                    <input type="hidden" name="id" class="btn btn-info btn-xs edit_data" />
                    <input type="submit" name="edit" style="float:right; border:none; padding: 15px 25px; border-radius: 15px; margin-top:-40px; margin-right: 40px; background-color: salmon; cursor: pointer;" class="add" value="CREATE NEW COURSE">        
                </form>
                <br>
                <br>
                <hr> 
                <div>
                    <table class="table">
                    <tr>
                        <th>Course Field</th>
                        <th>Course Name</th>
                        <th>Course Level</th>
                        <th>Number of lesson</th>
                        <th>Action</th>
                    </tr>

                    <?php

                        $sql = "SELECT * FROM COURSE";
                        $result = mysqli_query($con, $sql);

                    while($row = mysqli_fetch_assoc($result)){
                    ?>
                        
                        <tr>
                            <td><?php echo $row['c_field'] ?> </td>
                            <td><?php echo $row['c_name'] ?> </td>
                            <td><?php echo $row['c_level'] ?> </td>
                            <td><?php echo $row['lesson'] ?> </td>

                            <td>
                                <a href="course_details.php?id=<?php echo $row['id']?>">View</a>
                                <form action="tutor_course_upd.php" method="post" >                
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>" class="btn btn-info btn-xs edit_data" />
                                        <input type="submit" name="edit_course" class="edit" value="EDIT">
                                </form> 
                                <form action="admin_delete.php" method="post">     
                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                        <input type="submit" name="delete_course" class="delete" value="DELETE" onclick='return confirm("Are you sure want to delete this course?")'> 
                                </form>
                            
                            </td>    
                    </tr>
                    <?php  }
                    ?>
                    </table>

                </div>
            </div>
        </div>
    
    
      <?php }
      ?>

    <?php
      if(isset($_GET['personal_details'])){ 
        include("personal_details.php"); ?> 
        <div id='wrapper'>
        </div>
    <?php } ?>

    <?php
      if(isset($_GET['tutor_change_pass_form'])){ 
        include("tutor_change_pass_form.php"); ?> 
        <div id='wrapper'>
        </div>
    <?php } ?>



    </div>
</body>
</html>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}

        

</script>


</html>