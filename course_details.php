<?php 
    session_start();

    include("connection.php");

    if(!isset($_SESSION["tutor_name"])){
        header("location: tutorlogin.html");
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
  padding: 15px 8px 15px 28px;
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


.container{
    min-width: 1024px;
    min-height: 780px;
    background-color: rgb(146, 183, 250);
    margin-right: none;
}

.row{
    min-height: 100px;
    margin: 0 auto;
    display: flex;
    float: left;
    padding-top: 30px;
    padding-left: 30px;
    justify-content: center;
}

.column{
    width: 50%;
    padding: 20px;
}

.column h1{
    margin-bottom: 30px;
}

.column h2{
    margin-bottom: 30px;
    text-align: justify;
}
.box{
    width: 90%;
    float: center;
    align-items: center;
    min-height: 800px;
    display: relative;
    margin: auto auto;
    background-color: lightgrey;
    padding: 40px 40px;
}

.collapsible {
    display:none;
    background-color: darkviolet;
    color: white;
    cursor: pointer;
    padding: 20px;
    width: 90%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    margin-left: 45px;
}

.active, .collapsible:hover {
  background-color: rgb(146, 96, 146);
}

.collapsible:after {
  content: '\002B';
  color: white;
  font-weight: bold;
  float: right;
}

.active:after {
  content: "\2212";
}

.content {
    width: 90%;
    max-height: 0px;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    background-color: #f1f1f1;
    margin-left: 45px;
}

.content p{
    padding: 40px;
}

.content iframe{
    padding-left: 80px;
    padding-right: 60px;
    padding-bottom: 80px;
    border: none;
    float: center;
    margin: auto;
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
                <a href="#">Create Course</a>
                <a href="#">Course Information</a>
                <a href="tutor.php?personal_details">Personal Details</a>
                <a href="#">Change Password</a>
            </div>
        </div>
    </div>
    <div class="container">
        <?php 

            if(isset($_GET['id'])){
        
            $id = mysqli_real_escape_string($con, $_GET['id']);

            $sql = "SELECT * FROM course WHERE id = $id";
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);

            if($row) {
        ?>
            <br><br><br><br><br><br><br>
            <div class=box>
                <div class="row">
                    <div class="column" style="padding-right:10px">
                        <h1> Course Field: <br><?php echo $row['c_field']?></h1>
                        <h1> Course Name: <br><?php echo $row['c_name']?></h1>
                        <h1> Course Level: <?php echo $row['c_level']?></h1>
                        <h1> Instructor: <br><?php echo $row['tutor']?></h1>
                    </div>
                    <div class="column" style="border-left: purple 3px solid">
                        <h1> Course Description: <br><h2 style="white-space:pre-wrap;"><?php echo $row['c_description']?></h2></h1><hr style="border: solid 1px purple">
                        <h1 style="margin-top:20px"> Course Outcome: <br><h2><?php echo $row['c_outcome']?></h2></h1>
    
                    </div>   
                </div>
                <hr style="border: solid 1px purple">
                <div>
                <h1 style="padding-top: 50px; padding-left:50px; padding-bottom:10px;"> Number of lessons: <?php echo $row['lesson']?></h1>
                </div>
                <br>
                <button class="collapsible" id="collapsible1"><?php echo $row['title1']?></button>
                    <div class="content">
                        <p><?php echo $row['message1']?></p>
                        <iframe width="83%" height="600"src="<?php echo$row['link1']?>"></iframe>
                    </div>
                <button class="collapsible" id="collapsible2"><?php echo $row['title2']?></button>
                    <div class="content">
                        <p>m<?php echo $row['message2']?></p>
                        <iframe width="83%" height="600"src="<?php echo$row['link2']?>"></iframe>
                    </div>
                <button class="collapsible" id="collapsible3"><?php echo $row['title3']?></button>
                    <div class="content">
                        <p><?php echo $row['message3']?></p>
                        <iframe width="83%" height="600"src="<?php echo$row['link3']?>"></iframe>
                    </div>
                <button class="collapsible" id="collapsible4"><?php echo $row['title4']?></button>
                    <div class="content" >
                        <p><?php echo $row['message4']?></p>
                        <iframe width="83%" height="600"src="<?php echo$row['link4']?>"></iframe>
                    </div>
                <button class="collapsible" id="collapsible5"><?php echo $row['title5']?></button>
                    <div class="content">
                        <p><?php echo $row['message5']?></p>
                        <iframe width="83%" height="600"src="<?php echo$row['link5']?>"></iframe>
                    </div>
            </div>


        <?php }}?>
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

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}   

window.onload = function(){
    if (<?php echo $row['lesson']?> == "1"){
        document.getElementById("collapsible1").style.display="block";
    } else if (<?php echo $row['lesson']?> == "4"){
        document.getElementById("collapsible1").style.display="block";
        document.getElementById("collapsible2").style.display="block";
        document.getElementById("collapsible3").style.display="block";
        document.getElementById("collapsible4").style.display="block";
    } else if (<?php echo $row['lesson']?> == "3"){
        document.getElementById("collapsible1").style.display="block";
        document.getElementById("collapsible2").style.display="block";
        document.getElementById("collapsible3").style.display="block";
    } else if (<?php echo $row['lesson']?> == "2"){
        document.getElementById("collapsible1").style.display="block";
        document.getElementById("collapsible2").style.display="block";
    } else if (<?php echo $row['lesson']?> == "5"){
        document.getElementById("collapsible1").style.display="block";
        document.getElementById("collapsible2").style.display="block";
        document.getElementById("collapsible3").style.display="block";
        document.getElementById("collapsible4").style.display="block";
        document.getElementById("collapsible5").style.display="block";
    } 


}

</script>


</html>