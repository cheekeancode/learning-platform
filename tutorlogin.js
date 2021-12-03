window.onload = function(){
    document.getElementById('registerbox').style.display = 'none';
    document.getElementById('proceed').style.display = 'none';
    document.getElementById('extra').style.display = 'none';

    // document.getElementById('forgotwhole').style.display='none';
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

// function open(){
//     document.getElementById('forgotbox').style.display='block';
// }
// function close(){
//     document.getElementById('forgotbox').style.display='none';
// }


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





// function check(){

//             var ids = ['name','registeremail','registerpass','confirmpass'];
//             var err = [];
//             ids.forEach(function(id, i){
//                 var value = $("#"+id).val();
//                 if ($.trim(value).length === 0) {
//                     document.getElementById(id).animate([{background:'red'}], {duration:900});
//                     err.push('Please Enter Your '+id);
//                 } 
//             });
//                 if(err.length > 0){
//                     alert ('Please fill in all the information !');
//                     return false;
//                 } else{
//                         if(!document.getElementById('registeremail').value.match(/^[\w\-]+@[\w\-]+.[\w\-]+$/)){

//                             alert('Please enter a valid email address');
//                             return false;

//                         } else {
//                             if (document.getElementById('registerpass').style.borderColor != "green"){
//                                 alert('Password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters');
//                                 return false;
//                             } else {
//                                 if(document.getElementById('registerpass').value != document.getElementById('confirmpass').value){
//                                     alert ('Please make sure that password and confirm password are correct !!!');
//                                     document.getElementById('confirmpass').animate([{background:'red'}], {duration:900});
//                                     return false;
//                                 } else {
//                                     document.getElementById('fstep').style.background = "chartreuse";
//                                     return true;
//                                 }}}
//                             }
// }
