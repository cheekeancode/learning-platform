// hide certain element when the window or page is onload
window.onload = function(){
    document.getElementById('registerbox').style.display = 'none';
    document.getElementById('proceed').style.display = 'none';
    document.getElementById('extra').style.display = 'none';

}

// window.onload = function yesno(){
//     document.getElementById('extra').style.display = 'none';
// }


// function changetab(){
//     var j, box, buttonname;
//     box = document.getElementsByClassName("box");
//     for(j=0; j<box.length; j++){
//         box[j].style.display=none;
//     }
//     buttonname = document.getElementsByClassName("buttonname");
//     for (i = 0; i < buttonname.length; i++) {
//         buttonname[i].className = buttonname[i].className.replace(" active", "");
//     }

// function to trigger the pop up forgot password box
var forgotpasscontent = document.getElementById("forgotwhole");
var openpass = document.getElementById("open");
var closepass = document.getElementById("close");

openpass.onclick = function(){
    forgotpasscontent.style.display="block";
}
closepass.onclick = function(){
    forgotpasscontent.style.display="none";
}

// function to change the login form & register form in  the same page without loading the page
function changetab(){
    if (document.getElementById('registertab').checked){
        document.getElementById('registerbox').style.display='block';
        document.getElementById('loginbox').style.display='none';
    } else{
        document.getElementById('loginbox').style.display='block';
        document.getElementById('registerbox').style.display='none';
    }
}

// function open(){
//     document.getElementById('forgotbox').style.display='block';
// }
// function close(){
//     document.getElementById('forgotbox').style.display='none';
// }


// validation for creating password when registering an account
var myInput = document.getElementById("registerpass");
    
myInput.onkeyup = function() { 
// Validate lowercase letters
var lowerCaseLetters = /[a-z]/g;
//  validation for number
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


// function validation_loginform() {
//     valid = true;
    
//     if ((document.login_form.email.value == "") && (document.login_form.password.value == "")){
//         document.login_form.email.animate([{background:'red'}], {duration:900});
//         document.login_form.password.animate([{background:'red'}], {duration:900});
//         alert ("Please fill in your email and password");
//         valid= false;
//     }else{
//         if(document.login_form.email.value == ""){
//             document.login_form.email.animate([{background:'red'}], {duration:900});
//             alert ("Please fill in your email");
//             valid = false;
//         } else if(document.login_form.password.value == ""){
//             document.login_form.password.animate([{background:'red'}], {duration:900});
//             alert ("Please fill in your  password");
//             valid = false;
//         } 
//         return valid;
//     }
//     }



// function to change step(fieldset) by click next and back button on the register form
$(document).ready(function() {
		  
    $(".next").click(function(event) {
      var current_index = $(this).parent().index("fieldset");
      
      if(validateStep(current_index)){
          makeStepActive(current_index + 1);
      }else{
          event.preventDefault();
      }
    });

    $(".previous").click(function() {
      var current_index = $(this).parent().index("fieldset");
      makeStepActive(current_index - 1);
    });

   makeStepActive(0);	
   
  });

// function to show the progress bar and change the step(fieldset)
function makeStepActive(index){
      var step = $("#progressbar li:eq("+index+")");
      var feildset = $("fieldset:eq("+index+")");
      if(step.length){
          $("#progressbar").show();
          $("fieldset").hide();
          step.show();
          feildset.slideDown(500);
      }
  }

// function for ensuring that all validation requirement are achieved before proceeding to the next step
function validateStep(step){
    switch(step){


        // validation in 1st step needed to be achieved to proceed next step
        case 0:

            var ids = ['name','registeremail','registerpass','confirmpass'];
            var err = [];
            ids.forEach(function(id, i){
                var value = $("#"+id).val();
                if ($.trim(value).length === 0) {
                    document.getElementById(id).animate([{background:'red'}], {duration:900});
                    err.push('Please Enter Your '+id);
                } 
            });
                if(err.length > 0){
                    alert ('Please fill in all the information !');
                    return false;
                } else{
                        if(!document.getElementById('registeremail').value.match((/^[\w\-]+@[\w\-]+.[\w\-]+.[\w\-]+$/))){

                            alert('Please enter a valid email address');
                            return false;

                        } else {
                            if (document.getElementById('registerpass').style.borderColor != "green"){
                                alert('Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters');
                                return false;
                            } else {
                                if(document.getElementById('registerpass').value != document.getElementById('confirmpass').value){
                                    alert ('Please make sure that password and confirm password are correct !!!');
                                    document.getElementById('confirmpass').animate([{background:'red'}], {duration:900});
                                    return false;
                                } else {
                                    document.getElementById('fstep').style.background = "chartreuse";
                                    return true;
                                }}}
                            }
                            
                        // } else {
                        
                        //     }}
                        break;

        // validation in 2nd step needed to be achieved to proceed last step
        case 1:
        
            var ids = ['ICnum', 'img'];
            var err = [];
            ids.forEach(function(id, i){
                var value = $("#"+id).val();
                if ($.trim(value).length === 0) {
                document.getElementById(id).animate([{background:'red'}], {duration:900});
                err.push('Please Enter Your '+id);
                }
            });

            if(($("input[name='nationality']:checked").length === 0)){
                alert('Please select your nationality !');
                return false;
            }   
            else {
                if(err.length > 0 && document.getElementById('malaysian').checked) {
                    document.getElementById('upload').animate([{background:'red'}], {duration:900});
                    err.push('Please Enter Your '+id);
                    return false;
                    } else{ 
                        if(!document.getElementById('ICnum').value.match(/^[0-9]+$/) || document.getElementById('ICnum').value.length != 12 ){
                            alert('Please enter a valid length of ICnum which without any special characters');
                            return false;
                        } else{
                        document.getElementById('sstep').style.background = "chartreuse";
                        return true;
                        }}}
    
            return true;
            break;

            // validation in last step needed to be achieved to submit the register form successfully
            default:
                
                if(($("input[name='period']:checked").length === 0)&&($("input[name='payment']:checked").length === 0)){
                    alert('Please choose your subscription period and payment method !');
                    return false;
                } else {
                    if (($("input[name='period']:checked").length === 0)){
                        alert('Please choose your subscription period!');
                        return false;
                    } else if ($("input[name='payment']:checked").length === 0){
                        alert('Please select your payment method !');
                        return false
                    } 
                    return true;
                } 

    }
}


// jquery-nav for menu wrapper when max width of window is 1040px
$(document).ready(function(){
    $('.menu').on('click', function(){
        $('.mobile-nav').fadeToggle();
    })
});



  // Validate numbers
//   var numbers = /[0-9]/g;
//   if(myInput.value.match(numbers)) {  
//     number.classList.remove("invalid");
//     number.classList.add("valid");
//   } else {
//     number.classList.remove("valid");
//     number.classList.add("invalid");
//   }
  
//   // Validate length
//   if(myInput.value.length >= 8) {
//     length.classList.remove("invalid");
//     length.classList.add("valid");
//   } else {
//     length.classList.remove("valid");
//     length.classList.add("invalid");
//   }


// function to hide and show extra input elements to fill when user choosing their nationality
function yesno(){
    if (document.getElementById('nonmalaysian').checked){
        document.getElementById('extra').style.display='none';
        document.getElementById('proceed').style.display='block';
        document.getElementById('period').style.display='block';
        document.getElementById('period1').style.display='none';
        

    } else if (document.getElementById('malaysian').checked){
        document.getElementById('extra').style.display='block';
        document.getElementById('proceed').style.display='none';
        document.getElementById('period').style.display='none';
        document.getElementById('period1').style.display='block';

    } else{
        document.getElementById('extra').style.display='none';
        document.getElementById('proceed').style.display='none';
    }
}

// changing the default design of input[type="file"]
const uploadBtn = document.getElementById('img');
const filechosen = document.getElementById('chosenfile');

uploadBtn.addEventListener('change', function(){
    filechosen.textContent = this.files[0].name;
})
