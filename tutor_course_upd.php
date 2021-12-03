<?php
    session_start();
    require("connection.php");

            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Admin Update User Information</title>
</head>

<style>
    body{
    background-color:skyblue;
}

</style>
<body>
        <?php 
            $id = $_POST['id'];

            $query = "SELECT * FROM course WHERE id='$id' ";
            $query_run = mysqli_query($con, $query);

            if($query_run) {

                while($row = mysqli_fetch_array($query_run))
                {
        ?>
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h2>Tutor: Create New Course</h2>
                            <hr>
                            <br>
                            <form name="courseupd" action="" method="post" onsubmit="return valid();">
                                <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                <div class="form-group">
                                    <label for="">Field of Course</label>
                                    <input type="text" name="c_field" class="form-control" placeholder="e.g. Programming" value="<?php echo $row['c_field'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">Course Name</label>
                                    <input type="text" name="c_name" class="form-control" placeholder="Basic Concept for HTML&CSS" value="<?php echo $row['c_name'] ?>" required>
                                </div>
                                <div class="form-group" style="margin-top:40px">
                                    <label for="" style="margin-right: 20px" >Course Level:</label>
                                    <input type="radio" name="c_level"  value="Beginner" <?php if($row['c_level']=='Beginner') echo 'checked="checked"';?> required>
                                    <label for="malaysian" style="margin-right: 20px">Beginner</label>
                                    <input type="radio" name="c_level"  value="Intermediate" <?php if($row['c_level']=='Intermediate') echo 'checked="checked"';?> required>
                                    <label for="nonmalaysian" style="margin-right: 20px">Intermediate</label>
                                    <input type="radio" name="c_level"  value="Expert" <?php if($row['c_level']=='Expert') echo 'checked="checked"';?> required>
                                    <label for="nonmalaysian">Expert</label>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">Course Description</label>
                                    <textarea id="post-text" name="c_description" class="form-control" cols="30" rows="10" placeholder="Edit here. e.g. This couse is alk about...." required><?php echo $row['c_description'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">Course Outcome</label>
                                    <input type="text" name="c_outcome" class="form-control" placeholder="Basic Concept for HTML&CSS" value="<?php echo $row['c_outcome'] ?>" required>
                                </div>
                                <div class="form-group">
                                <label for="" style="padding-top:30px; margin-right:10px;">Number of Lesson:  </label>
                                <select name="lesson" id="parts">
                                    <option value="" <?php if($row['lesson']=="") echo 'selected="selected"'; ?>>Please choose</option>
                                    <option value="1" <?php if($row['lesson']=="1") echo 'selected="selected"'; ?>>1</option>
                                    <option value="2" <?php if($row['lesson']=="2") echo 'selected="selected"'; ?>>2</option>
                                    <option value="3" <?php if($row['lesson']=="3") echo 'selected="selected"'; ?>>3</option>
                                    <option value="4" <?php if($row['lesson']=="4") echo 'selected="selected"'; ?>>4</option>
                                    <option value="5" <?php if($row['lesson']=="5") echo 'selected="selected"'; ?>>5 (max)</option>
                                </select>
                                </div>
                                <div class="form-group" id="input-form1">
                                    <div id="input-form1" class="input-form">
                                        <input type="text" name="title1" class="form-control" placeholder="Lesson 1: Common tags you shoud know in HTML (Title)" value="<?php echo $row['title1'] ?>">
                                        <input type="text" name="message1" class="form-control" placeholder="Brief the content of lesson" value="<?php echo $row['message1'] ?>">
                                        <input type="text" name="link1" class="form-control" placeholder="Put Youtube link here" value="<?php echo $row['link1'] ?>">
                                    </div>
                                    <div id="input-form2" class="input-form" style="margin-top:30px;">
                                        <input type="text" name="title2" class="form-control" placeholder="Lesson 2: Common tags in PHP (Title)" value="<?php echo $row['title2'] ?>">
                                        <input type="text" name="message2" class="form-control" placeholder="Brief the content of lesson" value="<?php echo $row['message2'] ?>">
                                        <input type="text" name="link2" class="form-control" placeholder="Put Youtube link here" value="<?php echo $row['link2'] ?>">
                                    </div>
                                    <div id="input-form3" class="input-form" style="margin-top:30px;">
                                    <input type="text" name="title3" class="form-control" placeholder="Lesson 3: Create a simple static website (Title)" value="<?php echo $row['title3'] ?>">
                                        <input type="text" name="message3" class="form-control" placeholder="Brief the content of lesson" value="<?php echo $row['message3'] ?>">
                                        <input type="text" name="link3" class="form-control" placeholder="Put Youtube link here" value="<?php echo $row['link3'] ?>">
                                    </div>
                                    <div id="input-form4" class="input-form" style="margin-top:30px;">
                                    <input type="text" name="title4" class="form-control" placeholder="Lesson 4: Add on Js in your website (Title)" value="<?php echo $row['title4'] ?>">
                                        <input type="text" name="message4" class="form-control" placeholder="Brief the content of lesson" value="<?php echo $row['message4'] ?>">
                                        <input type="text" name="link4" class="form-control" placeholder="Put Youtube link here" value="<?php echo $row['link4'] ?>">
                                    </div>
                                    <div id="input-form5" class="input-form" style="margin-top:30px;">
                                    <input type="text" name="title5" class="form-control" placeholder="Lesson 5: Store in database (Title)" value="<?php echo $row['title5'] ?>">
                                        <input type="text" name="message5" class="form-control" placeholder="Brief the content of lesson" value="<?php echo $row['message5'] ?>">
                                        <input style="margin-bottom:80px" type="text" name="link5" class="form-control" placeholder="Put Youtube link here" value="<?php echo $row['link5'] ?>">
                                    </div>
                                </div>
                                <button type="submit" name="tupdate_course" class="btn btn-primary"> Update Data </button>

                                <a href="tutor.php" class="btn btn-danger"> CANCEL </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php
                    if(isset($_POST['tupdate_course']))
                    {
                        $c_field= $_POST['c_field'];
                        $c_name= $_POST['c_name'];
                        $c_level = $_POST['c_level'];
                        $c_description = $_POST['c_description'];
                        $c_outcome = $_POST['c_outcome'];
                        $lesson = $_POST['lesson'];

                        $title1 = $_POST['title1'];
                        $message1 = $_POST['message1'];
                        $link1 = $_POST['link1'];

                        $title2 = $_POST['title2'];
                        $message2 = $_POST['message2'];
                        $link2 = $_POST['link2'];

                        $title3 = $_POST['title3'];
                        $message3 = $_POST['message3'];
                        $link3 = $_POST['link3'];
                        
                        $title4 = $_POST['title4'];
                        $message4 = $_POST['message4'];
                        $link4 = $_POST['link4'];
                        
                        $title5 = $_POST['title5'];
                        $message5 = $_POST['message5'];
                        $link5 = $_POST['link5'];
                            
                        $query1 = " UPDATE course SET c_field='$c_field', c_name='$c_name', c_level='$c_level', c_description='$c_description', c_outcome='$c_outcome', lesson='$lesson', title1='$title1', title2='$title2', title3='$title3', title4='$title4', title5='$title5', message1='$message1', message2='$message2', message3='$message3', message4='$message4', message5='$message5', link1='$link1', link2='$link2', link3='$link3', link4='$link4', link5='$link5'
                        WHERE id='$id'  ";
                        $query_run1 = mysqli_query($con, $query1);

                        if($query_run1)
                        {
                            echo '<script> alert("Data Updated"); window.location.href="tutor.php"</script>';
                            // header("location: admin.php?user_information");
                        }
                        else
                        {
                            echo '<script> alert("Data Updated Unsuccessfullly"); </script>';
                        }
                    }
                    ?>


            <?php
        }
    }
    else
    {
        // echo '<script> alert("No Record Found"); </script>';
        ?>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>No Record Found</h4>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</body>
</html>

<script>

window.onload = function(){
    if (document.getElementById("parts").value == "1"){
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="none";
        document.getElementById("input-form3").style.display="none";
        document.getElementById("input-form4").style.display="none";
        document.getElementById("input-form5").style.display="none";
    } else if (document.getElementById("parts").value == "2"){
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="block";
        document.getElementById("input-form3").style.display="none";
        document.getElementById("input-form4").style.display="none";
        document.getElementById("input-form5").style.display="none";
    } else if (document.getElementById("parts").value == "3"){
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="block";
        document.getElementById("input-form3").style.display="block";
        document.getElementById("input-form4").style.display="none";
        document.getElementById("input-form5").style.display="none";
    } else if (document.getElementById("parts").value == "4"){
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="block";
        document.getElementById("input-form3").style.display="block";
        document.getElementById("input-form4").style.display="block";
        document.getElementById("input-form5").style.display="none";
    } else if (document.getElementById("parts").value == "5"){
        document.getElementById("collapsible1").style.display="block";
        document.getElementById("collapsible2").style.display="block";
        document.getElementById("collapsible3").style.display="block";
        document.getElementById("collapsible4").style.display="block";
        document.getElementById("collapsible5").style.display="block";
    } else {
        document.getElementById("input-form1").style.display="none";
        document.getElementById("input-form2").style.display="none";
        document.getElementById("input-form3").style.display="none";
        document.getElementById("input-form4").style.display="none";
        document.getElementById("input-form5").style.display="none";
    }
}

document.getElementById("parts").onchange = function(evt){
    var value = evt.target.value;

    if (value == "1"){
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="none";
        document.getElementById("input-form3").style.display="none";
        document.getElementById("input-form4").style.display="none";
        document.getElementById("input-form5").style.display="none";
    } else if (value == "2") {
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="block";
        document.getElementById("input-form3").style.display="none";
        document.getElementById("input-form4").style.display="none";
        document.getElementById("input-form5").style.display="none";
    } else if (value == "3"){
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="block";
        document.getElementById("input-form3").style.display="block";
        document.getElementById("input-form4").style.display="none";
        document.getElementById("input-form5").style.display="none";
    } else if (value == "4"){
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="block";
        document.getElementById("input-form3").style.display="block";
        document.getElementById("input-form4").style.display="block";
        document.getElementById("input-form5").style.display="none";
    } else if (value == "5"){
        document.getElementById("input-form1").style.display="block";
        document.getElementById("input-form2").style.display="block";
        document.getElementById("input-form3").style.display="block";
        document.getElementById("input-form4").style.display="block";
        document.getElementById("input-form5").style.display="block";
    } else {
        document.getElementById("input-form1").style.display="none";
        document.getElementById("input-form2").style.display="none";
        document.getElementById("input-form3").style.display="none";
        document.getElementById("input-form4").style.display="none";
        document.getElementById("input-form5").style.display="none";
    }
}

function valid(){
    if (document.getElementById("parts").value == "1"){
 
        if(document.courseupd.title1.value=="" || document.courseupd.message1.value=="" || document.courseupd.link1.value==""){
            alert("Please fill in all the input for lesson 1 !");
            return false;
        } 
    } else if (document.getElementById("parts").value == "2"){
        if(document.courseupd.title1.value=="" || document.courseupd.message1.value=="" || document.courseupd.link1.value=="" || document.courseupd.title2.value=="" || document.courseupd.message2.value=="" || document.courseupd.link2.value==""){
            alert("Please fill in all the input for lesson 1 & 2 !");
            return false;
        }
    } else if (document.getElementById("parts").value == "3"){
        if(document.courseupd.title1.value=="" || document.courseupd.message1.value=="" || document.courseupd.link1.value=="" || document.courseupd.title2.value=="" || document.courseupd.message2.value=="" || document.courseupd.link2.value=="" || document.courseupd.title3.value=="" || document.courseupd.message3.value=="" || document.courseupd.link3.value==""){
            alert("Please fill in all the input for lesson 1, 2 & 3 !");
            return false;
        }
    } else if (document.getElementById("parts").value == "4"){
        if(document.courseupd.title1.value=="" || document.courseupd.message1.value=="" || document.courseupd.link1.value=="" || document.courseupd.title2.value=="" || document.courseupd.message2.value=="" || document.courseupd.link2.value=="" || document.courseupd.title3.value=="" || document.courseupd.message3.value=="" || document.courseupd.link3.value=="" || document.courseupd.title4.value=="" || document.courseupd.message4.value=="" || document.courseupd.link4.value==""){
            alert("Please fill in all the input for lesson 1, 2, 3 & 4 !");
            return false;
        }
    } else if (document.getElementById("parts").value == "5"){
        if(document.courseupd.title1.value=="" || document.courseupd.message1.value=="" || document.courseupd.link1.value=="" || document.courseupd.title2.value=="" || document.courseupd.message2.value=="" || document.courseupd.link2.value=="" || document.courseupd.title3.value=="" || document.courseupd.message3.value=="" || document.courseupd.link3.value=="" || document.courseupd.title4.value=="" || document.courseupd.message4.value=="" || document.courseupd.link4.value=="" || document.courseupd.title5.value=="" || document.courseupd.message5.value=="" || document.courseupd.link5.value==""){
            alert("Please fill in all the input for lesson 1, 2, 3,  4 & 5 !");
            return false;
        }
    } else return true;
}

</script>