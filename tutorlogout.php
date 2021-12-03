<?php

session_start();

if(isset($_SESSION["tutor_name"])){
    unset($_SESSION["tutor_name"]);
}

header("location: tutorlogin.php");