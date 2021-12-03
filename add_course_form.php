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
            <div class="container">
                <div class="jumbotron">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <h2>Tutor: Create New Course</h2>
                            <hr>
                            <br>
                            <form action="add_course.php" method="post">
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label for="">Field of Course</label>
                                    <input type="text" name="c_field" class="form-control" placeholder="e.g. Programming" required>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">Course Name</label>
                                    <input type="text" name="c_name" class="form-control" placeholder="Basic Concept for HTML&CSS" required>
                                </div>
                                <div class="form-group" style="margin-top:40px">
                                    <label for="" style="margin-right: 20px" >Course Level:</label>
                                    <input type="radio" name="c_level"  value="Beginner" required>
                                    <label for="malaysian" style="margin-right: 20px">Beginner</label>
                                    <input type="radio" name="c_level"  value="Intermediate"  required>
                                    <label for="nonmalaysian" style="margin-right: 20px">Intermediate</label>
                                    <input type="radio" name="c_level"  value="Expert"  required>
                                    <label for="nonmalaysian">Expert</label>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">Course Description</label>
                                    <textarea id="post-text" name="c_description" class="form-control" cols="30" rows="10" placeholder="Edit here. e.g. This couse is alk about...." required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="" style="padding-top:20px;">Course Outcome</label>
                                    <input type="text" name="c_outcome" class="form-control" placeholder="Basic Concept for HTML&CSS" required>
                                </div>
                                <div class="form-group">
                                <label for="" style="padding-top:30px; margin-right:10px;">Number of Lesson:  </label>
                                <select name="lesson" id="parts">
                                    <option value="">Please choose</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5 (max)</option>
                                </select>
                                </div>
                                <div class="form-group" id="input-form1">
                                    <div id="input-form1" class="input-form">
                                        <input type="text" name="title1" class="form-control" placeholder="Lesson 1: Common tags you shoud know in HTML (Title)">
                                        <input type="text" name="message1" class="form-control" placeholder="Brief the content of lesson">
                                        <input type="text" name="link1" class="form-control" placeholder="Put Youtube link here">
                                    </div>
                                    <div id="input-form2" class="input-form" style="margin-top:30px;">
                                        <input type="text" name="title2" class="form-control" placeholder="Lesson 2: Common tags in PHP (Title)">
                                        <input type="text" name="message2" class="form-control" placeholder="Brief the content of lesson">
                                        <input type="text" name="link2" class="form-control" placeholder="Put Youtube link here">
                                    </div>
                                    <div id="input-form3" class="input-form" style="margin-top:30px;">
                                    <input type="text" name="title3" class="form-control" placeholder="Lesson 3: Create a simple static website (Title)">
                                        <input type="text" name="message3" class="form-control" placeholder="Brief the content of lesson">
                                        <input type="text" name="link3" class="form-control" placeholder="Put Youtube link here">
                                    </div>
                                    <div id="input-form4" class="input-form" style="margin-top:30px;">
                                    <input type="text" name="title4" class="form-control" placeholder="Lesson 4: Add on Js in your website (Title)">
                                        <input type="text" name="message4" class="form-control" placeholder="Brief the content of lesson">
                                        <input type="text" name="link4" class="form-control" placeholder="Put Youtube link here">
                                    </div>
                                    <div id="input-form5" class="input-form" style="margin-top:30px;">
                                    <input type="text" name="title5" class="form-control" placeholder="Lesson 5: Store in database (Title)">
                                        <input type="text" name="message5" class="form-control" placeholder="Brief the content of lesson">
                                        <input style="margin-bottom:80px" type="text" name="link5" class="form-control" placeholder="Put Youtube link here">
                                    </div>
                                </div>
                                <button type="submit" name="create" class="btn btn-primary"> Update Data </button>

                                <a href="tutor.php" class="btn btn-danger"> CANCEL </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

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

</script>