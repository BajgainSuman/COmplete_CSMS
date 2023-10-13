function validation(){
    
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    // var message = document.getElementById("message").value;
    var error_message = document.getElementById("error_message");
    
    error_message.style.padding = "5px";
    error_message.style.color = "red";
    error_message.style.textAlign = "center";
    //error_message.style.backgroundColor = "#fe8b8e";
    error_message.style.transition = "all 0.5s ease";
    error_message.style.fontSize = "12px";
    
    var text;
    if(name.length <= 5){
      text = "Enter valid Name";
      error_message.innerHTML = text;
      return false;
    }

    if(isNaN(phone) || phone.length != 10){
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
    // if(message.length <= 1){
    //   text = "Enter at least 10 Characters";
    //   error_message.innerHTML = text;
    //   return false;
    // }
    //alert("Form Submitted Successfully!");
    return true;
  }