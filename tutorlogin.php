<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYstudy Login Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css-reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="tutorlogin.css">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/> -->
</head>
<body>
    <!-- create header -->
    <div class="header-container">
        <header>
            <div class="logo">
                <a href="./main.html">
                    <img src="./logo.png" alt="" style="width: 180px">
                </a>
                <span style="color:rgb(250, 196, 255);">Tutor Page</span>
            </div>
            <nav>
                <a href="./main.html" class="mybutton">HOME</a>
                <a href="./contactus.html" class="mybutton">CONTACT US</a>
                <a href="#" class="mybutton">LOGIN</a>
            </nav>
        </header>
    </div>

    <div class="container">
        <div class="buttontab">
                <input type="radio" class="buttonname" name="buttonname" id="logintab" style="display: none;" onclick="changetab();"checked>
                <label for="logintab" class="buttontab" id="loginnow">LOGIN NOW</label>
                <input type="radio" class="buttonname" name="buttonname" id="registertab" style="display: none;" onclick="changetab();" >
                <label for="registertab" class="buttontab" id="registernow">REGISTER NOW</label>
        </div>

        <div class="box" id="loginbox">
        
            <!-- <input type="radio" class="buttonname" name="buttonname" id="logintab" onclick="changetab();"checked>
            <label for="loginnow">LOGIN NOW</label>
            <span>|</span>
            <input type="radio" class="buttonname" name="buttonname" id="registertab" onclick="changetab();" >
            <label for="registernow">REGISTER NOW</label> -->
            
            <div id="loginform">
                <form name="login_form" method="post" action="tutor_login_form.php" enctype="multipart/form-data">
                    <div class="inputwrapper">
                        <label for="email" class="information" pattern="/^[\w\-]+@[\w\-]+.[\w\-]+$/" title="Please enter a valid email address">Email</label>
                        <input type="text" name="loginemail" id="email" placeholder="MYstudy@graduate.utm.my" required>
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="inputwrapper">
                        <label for="pass" class="information" pattern="/^[a-z]{8,}+$/" title="Password must contain at least 1 number, 1lowerCase letter and 8 characters">Password</label>
                        <input type="password" name="loginpassword" id="pass" placeholder="mystudy123" required>
                        <i class="fas fa-lock"></i>
                    </div>

                    <div>
                        <input type="submit" value="Log in" class="login" id="loginbutton" name="tloginbutton">
                    </div>

                    <p style="text-align: center; font-weight: bold; margin-bottom: 25px;margin-top: 40px;"><br>OR SIGN IN WITH</p>

                    <div class="socialmedia">
                        <a href="">
                            <img src="./images/facebook.png" alt="facebookicon" id="fb">
                        </a>
                        
                        <a href="">
                            <img src="./images/search.png" alt="" id="google">
                        </a>

                        <a href="">
                            <img src="./images/twitter.png" alt="twittericon" id="twitter">
                        </a>

                        <a href="">
                            <img src="./images/microsoft.png" alt="twittericon" id="twitter">
                        </a>
                    </div>
                </form>

                <button type="button" class="forgotpass" id="open">Forgot your password?</button>
                <div id="forgotwhole">
                    <div class="forgotbox" id="forgotboxes">
                        <div class="forgotheader">
                            <p id="forgottitle">Lost your password? </p>
                            <button type="button" class="fas fa-times" id="close"></button>
                        </div>
                        <div>
                            <form action="resetpass.php" method="post">
                                <p class="passcontent">Please enter your email address. You will receive a link to create a new password.</p>
                                <input type="text" name="email" id="emailpass" placeholder="Email Address">
                                <span class="fas fa-envelope" id="e-mailicon"></span>
                                <div>
                                    <input type="submit" value="Reset Password" id="resetpassword" name="resetpass">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="box" id="registerbox">

            <!-- <input type="radio" class="buttonname" name="buttonname" id="logintab" onclick="changetab();" >
            <label for="logintab">LOGIN NOW</label>
            <span>|</span>
            <input type="radio" class="buttonname" name="buttonname" id="registertab" onclick="changetab();" checked>
            <label for="registertab">REGISTER NOW</label> -->
            
            <form id="registerform" method="post" action="tutor_register_form.php" onSubmit="return confirm('Do you make sure all the inforamtion are correct and submit?')" enctype="multipart/form-data">

                <fieldset>
                    <div class="page">
                        <div class="inputwrapper" style="margin-top: 20px;">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="as in NRIC/Passport" required>
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="inputwrapper">
                            <label for="email" class="information">Email</label>
                            <input type="text" name="email" id="registeremail" placeholder="MYstudy@graduate.utm.my" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Please enter a valid format email address" required>
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="inputwrapper">
                            <label for="registerpass" class="information">Password</label>
                            <input type="password" name="password" id="registerpass" placeholder="mystudy123"  title="Must contain at least one number and one lowercase letter, and at least 8 or more characters" required>
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="inputwrapper">
                            <label for="conforimpass" class="information">Confirm Password</label>
                            <input type="password" name="confirmpassword" id="confirmpass" placeholder="same as password above" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <input type="submit" value="Sign Up" class="register" id="signupbutton" name="tsingupbutton">
                </fieldset>
            </form>
        </div>
    </div>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script src="./tutorlogin.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>

window.onload = function(){
    document.getElementById('registerbox').style.display = 'none';
}

var forgotpasscontent = document.getElementById("forgotwhole");
var openpass = document.getElementById("open");
var closepass = document.getElementById("close");


openpass.onclick = function(){
    forgotpasscontent.style.display="block";

}
closepass.onclick = function(){
    forgotpasscontent.style.display="none";
}

function changetab(){
    if (document.getElementById('registertab').checked){
        document.getElementById('registerbox').style.display='block';
        document.getElementById('loginbox').style.display='none';
    } else{
        document.getElementById('loginbox').style.display='block';
        document.getElementById('registerbox').style.display='none';
    }
}

var myInput = document.getElementById("registerpass");
    
myInput.onkeyup = function() { 
// Validate lowercase letters
var lowerCaseLetters = /[a-z]/g;
var numbers = /[0-9]/g;

if (myInput.value.match(lowerCaseLetters) && myInput.value.match(numbers) && myInput.value.length >= 8){
    document.getElementById('registerpass').style.border= "green solid 5px";}
    else if ((myInput.value.match(numbers)&&myInput.value.length >= 8)||(myInput.value.match(lowerCaseLetters)&&myInput.value.length >= 8)||(myInput.value.match(lowerCaseLetters)&&myInput.value.match(numbers))){
        document.getElementById('registerpass').style.border= "orange solid 5px";
    }else if (myInput.value.match(lowerCaseLetters)||myInput.value.match(numbers)){
        document.getElementById('registerpass').style.border= "yellow solid 5px";
    } else{document.getElementById('registerpass').style.border= "none";
    }
}



</script>

</html>
