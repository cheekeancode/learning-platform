<?php
session_start();

    include("connection.php");
    // $Error = "";

    // if (isset($_SESSION["fullname"])){
    //     header("Location: user.php");
    // }

    if(isset($_POST['tloginbutton'])){
    
        $email= $_POST['loginemail'];
        $password = $_POST['loginpassword'];
        


        // if(!empty($email) && !empty($password))
        // {
            $query = "SELECT * FROM tutor WHERE email='$email' AND password ='$password' limit 1";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) >0){
                $row = mysqli_fetch_assoc($result);
                $_SESSION['tutor_name'] = $row['name'];
                $_SESSION['tutor_email'] = $row['email'];
                $_SESSION['tutor_education'] = $row['education'];
                $_SESSION['tutor_motto'] = $row['motto'];
                $_SESSION['tutor_id'] = $row['id'];
                header("location: tutor.php");
            } else {
                echo"<script> alert('Wrong/Invalid email and password !'); window.location.href= 'tutorlogin.php';</script>";
            }
            // $row = mysqli_num_rows($result);
        } 