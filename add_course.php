<?php
    include("connection.php");
    session_start();
    error_reporting(0);

    

    if(isset($_POST['create'])){
        $tutor = $_SESSION["tutor_name"];
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

        if ($lesson == "1"){
            if(empty($title1) && empty($message1) && empty($link1)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1 !!!'); window.location.href = 'javascript:history.go(-1)' </script>";
            }
        } else if ($lesson == "2"){
            if(empty($title1) && empty($message1) && empty($link1) && empty($title2) && empty($message2) && empty($link2)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1 & 2 !!!'); window.location.href = 'javascript:history.go(-1)' </script>";
                
            }
        } else if ($lesson == "3"){
            if(empty($title1) && empty($message1) && empty($link1) && empty($title2) && empty($message2) && empty($link2) && empty($title3) && empty($message3) && empty($link3)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1, 2 & 3 !!!'); window.location.href = 'javascript:history.go(-1)' </script>";
    
            }
        } else if ($lesson == "4"){
            if(empty($title1) && empty($message1) && empty($link1) && empty($title2) && empty($message2) && empty($link2) && empty($title3) && empty($message3) && empty($link3) && empty($title4) && empty($message4) && empty($link4)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1, 2, 3 & 4 !!!'); window.location.href = 'javascript:history.go(-1)' </script>";
            
            }
        } else if ($lesson == "5"){
            if(empty($title1) && empty($message1) && empty($link1) && empty($title2) && empty($message2) && empty($link2) && empty($title3) && empty($message3) && empty($link3) && empty($title4) && empty($message4) && empty($link4) && empty($title5) && empty($message5) && empty($link5)){
                echo "<script> alert('Please fill in the all the inputs for lesson 1, 2, 3, 4 & 5 !!!'); window.location.href = 'javascript:history.go(-1)' </script>";
            
            }
        } else {

            $query = "insert into course (tutor, c_field, c_name, c_level, c_description, c_outcome, lesson, title1, message1, link1, title2, message2, link2, title3, message3, link3, title4, message4, link4, title5, message5,	link5	
        ) values ('$tutor', '$c_field',	'$c_name', '$c_level', '$c_description', '$c_outcome', '$lesson', '$title1', '$message1', '$link1',	'$title2', '$message2',	'$link2', '$title3', '$message3', '$link3',	'$title4', '$message4',	'$link4', '$title5', '$message5', '$link5'	
        )";
        
        $result = mysqli_query($con, $query);
                if ($result){
                    echo"<script> alert('Create course successfully'); window.location.href= 'tutor.php'</script>";

                    
                } else{
                    echo"<script> alert('Ceate course unsuccessfully'); window.location.href= 'add_course_form.php'</script>";
                }

            }
        }
    


        
                
?>