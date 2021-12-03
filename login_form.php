<?php
session_start();

    include("connection.php");
    // $Error = "";

    // if (isset($_SESSION["fullname"])){
    //     header("Location: user.php");
    // }

    if(isset($_POST['loginbutton'])){
    
        $email= $_POST['loginemail'];
        $password = $_POST['loginpassword'];
        


        // if(!empty($email) && !empty($password))
        // {
            $query = "SELECT * FROM user WHERE email='$email' AND password ='$password' limit 1";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) >0){
                $row = mysqli_fetch_assoc($result);
                $_SESSION['user_name'] = $row['name'];
                header("location: user.php");
            } else {
                echo"<script> alert('Wrong/Invalid email and password !'); window.location.href= 'login.php';</script>";
            }
            // $row = mysqli_num_rows($result);
        } 

    // if(isset($_POST['resetpass'])){
    //     echo"<script> alert('Please check your email !'); window.location.href= 'login.php';</script>";
    // }
        
    
        // if(mysqli_num_rows($result) > 0){
        //     $user_data = mysqli_fetch_assoc($result);
        //     header("Location: user.php");
        // }    
        //     else {
        //         echo "wrong username or password";
        //     }
        // }


        // if($Error == ""){
        //     $arr['error'] = $email;
        //     $arr['password'] = $email;

        //     $query = "select * from user where email = :email limit 1 && password = :password limit 1";
        //     $stm = $con->prepare($query);
        //     $check->$stm->execute($arr);
        //     header("Location: user.php");

        //     if($check){
        //         $data = $stm->fetchAll(PDO::FETCH_ASSOC);

        //         if(is_array($data)){
        //             header("location: user.php");
        //             die;
        //         }
                
        //     }