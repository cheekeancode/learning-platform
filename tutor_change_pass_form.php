<?php 

    include("connection.php");

    session_start();

    if(!isset($_SESSION["tutor_name"])){
        header("location: tutorlogin.html");
    }

    error_reporting(0);

?>

<style>
    .change_box{
        background-color: rgb(213, 156, 241);
        box-shadow: darkviolet 8px 8px;
        border-radius: 15px;
        width:70%;
        float: center;
        margin: auto;
        justify-content: center;
    }

    .row input[type='password']{

        border:none;
        padding: 5px 30px;
 
    }

    .btn input[type='submit']{
        background-color: green;
        color:white;
        border:none;
        padding: 15px 30px;
        margin-left: 43%;
        margin-top: 30px;
        margin-bottom: 30px;
        border-radius: 30px;
    }

    .btn input[type='submit']:hover{
        background-color: darkgreen;
        transform: scale(1.2);
        transition: 0.5s;
    }
    


</style>
<div id='wrapper' class="wrapper" >
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
    
    <div class= change_box>
        <div class="row">
            <h1 style="padding-top: 30px; padding-bottom:10px; text-align:center">Tutor: Change Password</h1>
            <hr style="margin-left:30px; margin-right:30px">
        </div>
        <div class="row">
            <form action="" method="post" >            
            <table align="center">
                <tr height="50">
                <td style="background-color:blueviolet; color:white">Old Password :</td>
                <td style="background-color:blueviolet; color:white"><input type="password" name="opwd" id="opwd" required ></td>
                </tr>
                <tr height="50">
                <td style="background-color:blueviolet; color:white">New Passowrd :</td>
                <td style="background-color:blueviolet; color:white"><input type="password" name="npwd" id="npwd" required></td>
                </tr>
                <tr height="50">
                <td style="background-color:blueviolet; color:white">Confirm Password :</td>
                <td style="background-color:blueviolet; color:white"><input type="password" name="cpwd" id="cpwd" required></td>
                </tr>
            </table>
                <div class="btn">
                <input type="submit" name="change_pwd" value="Change Password" onclick='return confirm("Are you sure want to change your password?")'>
                <div>
            </form>
        </div>
    </div>
</div>


<?php

if(isset($_POST['change_pwd']))
{
        $oldpass = $_POST['opwd'];
        $email = $_SESSION['tutor_email'];
        $newpassword = $_POST['npwd'];
        $confirmpassword = $_POST['cpwd'];
        $sql = "SELECT password FROM tutor where password='$oldpass' && email='$email' limit 1";
        $result = mysqli_query($con, $sql);
        $num = mysqli_fetch_row($result);

        $pattern = '/^(?=.*[0-9])(?=.*[a-z]).{8,}$/';


        if($num>0)
        {
            if ($oldpass == $newpassword){
                echo"<script> alert('New password cannot same as current password !!!'); window.location.href = 'tutor.php?tutor_change_pass_form' </script>";

            } else {
            if (!preg_match($pattern, $newpassword)){
                echo"<script> alert('New password must contain at least 1 number, 1 lowerCase letter and 8 characters !!!'); window.location.href = 'tutor.php?tutor_change_pass_form' </script>";

            } else {   
                if ($newpassword != $confirmpassword){
                    echo"<script> alert('Please ensure that new password and confirm password you key in are the same !!!'); window.location.href = 'tutor.php?tutor_change_pass_form</script>";
    
                } else {
                    $sql2 = "UPDATE tutor SET password = '$newpassword' where email='$email'";
                    $result2 = mysqli_query($con, $sql2);

                    if(result2){
                        echo"<script> alert('Password updated successfully'); window.location.href = 'tutor.php?tutor_change_pass_form' </script>";
                    } else {
                        echo"<script> alert('Password updated unsuccessfully'); window.location.href = 'tutor.php?tutor_change_pass_form' </script>";
                    }  
                }}}}
                else
                {
                    echo"<script> alert('Your current password not matched !!!'); window.location.href = 'tutor.php?tutor_change_pass_form' </script>";
                }
}

?>