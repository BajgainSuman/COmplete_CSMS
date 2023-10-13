/* menu button */
const menuBtn = document.querySelector('.menu-bar');
const menu = document.querySelector('nav');

menuBtn.addEventListener('click', () => {
    menu.classList.toggle('active');
    menuBtn.classList.toggle('fa-times');
});



/* login */
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
/* end */

/*validate Email and Password*/

function validate(){
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
    var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    
    error_message.style.padding = "5px";
    error_message.style.color = "red";
    error_message.style.textAlign = "center";
    //error_message.style.backgroundColor = "#fe8b8e";
    error_message.style.transition = "all 0.5s ease";
    error_message.style.fontSize = "12px";
    
    var text;
    if(firstname.length <= 1){
      text = "Enter valid First Name";
      error_message.innerHTML = text;
      return false;
    }

    if(lastname.length < 2){
        text = "Enter valid  Last Name";
        error_message.innerHTML = text;
        return false;
      }

    if(isNaN(mobile) || mobile.length != 10){
      text = "Enter valid Mobile";
      error_message.innerHTML = text;
      return false;
    }
    if(email.indexOf("@") <=0 || email.length <6){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
      text = "Please Enter valid Email";
      error_message.innerHTML = text;
      return false;
    }
    if(message.length <= 1){
      text = "Enter at least 10 Characters";
      error_message.innerHTML = text;
      return false;
    }
    //alert("Form Submitted Successfully!");
    return true;
  }
