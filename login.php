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
    <link rel="stylesheet" href="user_login.css">
</head>

<body>
    <!-- create header -->
    <div class="header-container">
        <header>
            <div class="logo">
                <a href="./main.html">
                    <img src="./logo.png" alt="" style="width: 180px">
                </a>
            </div>
            <nav>
                <a href="./main.html" class="mybutton">HOME</a>
                <a href="#" class="mybutton">COURSE</a>
                <a href="#" class="mybutton">ABOUT US</a>
                <a href="./contactus.html" class="mybutton">CONTACT US</a>
                <a href="#" class="mybutton">LOGIN</a>
            </nav>

            <!-- wrapper to wrap the element when the max width of window is 1040px -->
            <div class="burger-wrapper">
                <img src="./images/menu.svg" alt="" style="width: 40px;" class="menu">
                <nav class="mobile-nav">
                    <a href="./main.html" class="navbutton">HOME</a>
                    <a href="#" class="navbutton">COURSE</a>
                    <a href="#" class="navbutton">ABOUT US</a>
                    <a href="./contactus.html" class="navbutton">CONTACT US</a>
                    <a href="./login.php" class="navbutton">LOGIN</a>
                </nav>
            </div>
        </header>
    </div>

    <!-- container after the header -->
    <div class="container">
        <!-- changeable logn and register form without loading page -->
        <div class="buttontab">
                <input type="radio" class="buttonname" name="buttonname" id="logintab" style="display: none;" onclick="changetab();"checked>
                <label for="logintab" class="buttontab" id="loginnow">LOGIN NOW</label>
                <input type="radio" class="buttonname" name="buttonname" id="registertab" style="display: none;" onclick="changetab();" >
                <label for="registertab" class="buttontab" id="registernow">REGISTER NOW</label>
        </div>

        <!-- login form -->
        <div class="box" id="loginbox">
        
            <div id="loginform">
                <form name="login_form" method="post" action="login_form.php" onSubmit="return validation_loginform()">
                    <div class="inputwrapper">
                        <label for="email" class="information">Email</label>
                        <input type="text" name="loginemail" id="email" placeholder="MYstudy@graduate.utm.my" required>
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="inputwrapper">
                        <label for="pass" class="information">Password</label>
                        <input type="password" name="loginpassword" id="pass" placeholder="mystudy123" required>
                        <i class="fas fa-lock"></i>
                    </div>

                    <div>
                        <input type="submit" value="Log in" class="login" id="loginbutton" name="loginbutton">
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

                <!-- trigger/click to pop up forgot password box -->
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

        <!-- register form with multiple step -->
        <div class="box" id="registerbox">
            
            <form id="registerform" method="post" action="register_form.php" onSubmit="return confirm('Do you make sure all the inforamtion are correct and submit?')" enctype="multipart/form-data">
                <ul class="progressbar" id="progressbar" style="text-align:center;list-style-type: none;transform: translateX(5%);">
                    <li class="step" id="fstep"> 1 <br><span style="margin-left: -20px;">ACCOUNT</span><span style="display: block;margin-left: -8px;">SETUP</span></span></li>
                    <li class="step" id="sstep"> 2 <br> <span style="margin-left: -20px;">PERSONAL</span><br><span style="margin-left: -12px;"></span>DETAILS</span></li>
                    <li class="step" id="tstep"> 3 <br><span style="display: block;margin-left:-35px;margin-top: 10px;">SUBSCRIPTION</span></li>
                </ul>

                <!-- 1st step -->
                <fieldset>
                    <div class="page">
                        <div class="inputwrapper" style="margin-top: 20px;">
                            <label for="name">Full Name</label>
                            <input type="text" name="name" id="name" placeholder="as in NRIC/Passport" required>
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="inputwrapper">
                            <label for="email" class="information">Email</label>
                            <input type="text" name="email" id="registeremail" placeholder="MYstudy@graduate.utm.my" required>
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="inputwrapper">
                            <label for="registerpass" class="information">Password</label>
                            <input type="password" name="password" id="registerpass" placeholder="mystudy123" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="inputwrapper">
                            <label for="conforimpass" class="information">Confirm Password</label>
                            <input type="password" name="confirmpassword" id="confirmpass" placeholder="same as password above" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="NEXT" />
                </fieldset>

                <!-- 2nd step -->
                <fieldset>
                    <div class="page">
                        <div class="inputwrapper">
                            <div class="nationality" style="margin-top: 30px;">
                                <label for="nationality">Nationality:</label>
                                <input type="radio" onclick="yesno()" name="nationality" id="malaysian" value="malaysian" required>
                                <label for="malaysian">Malaysian</label>
                                <input type="radio" onclick="yesno()" name="nationality" id="nonmalaysian" value="non-malaysian"  required>
                                <label for="nonmalaysian">Non-Malaysian</label>
                            </div>
                        </div>
                        <div class="inputwrapper">
                            <div id="proceed">
                                <p style="margin-right:50px; background-color:cornsilk; text-align: center; padding: 10px 5px;">You can just proceed to subcription by clicking next button</p>
                            </div>
                            <div id="extra">
                            <label for="ICnum">Identity Card Number</label>
                            <input type="text" name="ICnum" id="ICnum" placeholder="e.g without any special character:'-'">
                            <label for="img">
                                <br>Photo of owner with holding MyKad (front part)
                                <i class="fa fa-image" id="upload">Click to upload your image</i><input type="file" id="img" name="img" accept="image/*" style="display: none; margin-bottom: 40px;"><span id="chosenfile" style="font-size: 12pt; margin-left: 265px; padding-top: 100px; align-items: center;">No file chosen</span>
                            </label>
                            </div>
                        </div>
                    </div>
                    <input type="button" name="next" class="next action-button" value="NEXT" style="margin-top: 20px;" />
                    <input type="button" name="previous" class="previous action-button" value="BACK" style="margin-top: 20px;"/>
                </fieldset>

                <!-- 3rd step -->
                <fieldset>
                    <div class="page">
                        <div class="inputwrapper">
                            <div class="period" id="period">
                                <label for="period">Select your subscription period:<br></label>
                                <div class= "monthly">
                                    <label for="monthly">
                                        <input type="radio" id="monthly" name="period"  value="monthly" style="display:none" required>
                                        <p name="period" id="monthly">Monthly Subcription<br>Fees: RM30</p>
                                    </label>
                                </div>
                                <div class="yearly">
                                <label for="yearly">
                                    <input type="radio" name="period" id="yearly" value="yearly" style="display:none" required>
                                    <p>Yearly Subcription<br>Fees: RM100</p>
                                </label>
                                </div>
                            </div>
                            <div class="period1" id="period1">
                                <label for="period">Select your subscription period:<br></label>
                                <div class= "monthly">
                                    <label for="monthly">
                                        <input type="radio" id="monthly" name="period"  value="monthly" style="display:none" required>
                                        <p name="period" id="monthly">Monthly Subcription<br>Fees: <del>RM30</del> RM10 <span style="color:red">  (discount: 60%)</span></p>
                                    </label>
                                </div>
                                <div class="yearly">
                                <label for="yearly">
                                    <input type="radio" name="period" id="yearly" value="yearly" style="display:none" required>
                                    <p>Yearly Subcription<br>Fees: <del>RM100</del> RM30 <span style="color:red">  (discount: 70%)</span></p>
                                </label>
                                </div>
                            </div>
                        </div>
                        <div class="inputwrapper" style="margin-left: 0px;">
                            <div class="payment">
                                <label for="payment">Select your payment method:</label><br>
                                <label for="card">
                                    <input type="radio" id="card" name="payment" style="display:none" value="card" >
                                    <img src="./images/card.png" alt="credit/debitcard" id="card" name='payment' value="card" style="width: 143px;" required>
                                </label>
                                <label for="FPX">
                                    <input type="radio" name="payment" id="FPX" style="display:none" value="FPX">
                                    <img src="./images/FPX.png" alt="FPX" id="FPX" name="payment" style="width: 98px;" value="FPX" required>
                                </label>
                                <label for="paypal">
                                    <input type="radio" name="payment" id="paypal" style="display:none" value="Paypal">
                                    <img src="./images/paypal.png" alt="paypal" id="paypal" name="payment" style="width: 95px;" value="Paypal" required>
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="next" type="submit" name="signupbutton">Create Account</button>
                    <input type="button" name="previous" class="previous action-button" value="BACK">
                </fieldset>
            </form>
        </div>
    </div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="./login.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script>
    
</script>

</html>


                  <!-- <div class="row">
                        <nav>
                            <div class="col-6">
                                <label for="otherField1">Group: Heres One!</label>
                                <input type="text" class="form-control w-100" id="otherField1">
                            </div>
                            <div class="col-6">
                                <label for="otherField2">Group: Another One!</label>
                                <input type="text" class="form-control w-100" id="otherField2">
                            </div>
                        </nav>
                    </div> -->