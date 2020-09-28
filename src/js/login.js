function validateLogin(){

    //asign value 
    var username = document.getElementById("dusernaame").value; 
    var password = document.getElementById("adpassword").value;

    var emailValidation  = document.getElementById("lblUsernameValidator");

    //check user name not null
    if(username == null || username =="" || ValidateEmail(username)==false){   

        alert("Please enter your username");

        emailValidation.style.display = "block";
    }
    else
    {
        emailValidation.style.display = "none";
    }
    //chack password not null
    if(password == null || password == ""){

        alert("Please enter the password");
        return fales;
    }
    else{
        alert('Login Succesfull');
    }
    
}

function ValidateEmail(mail) 
{
 if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(mail))
  {
    return (true)
  }
    return (false)
}

// show password checkbox 
function adShowPassword(){

    //get id
    var showPw = document.getElementById("adpassword");  
    //check password type
    if(showPw.type == "password"){
        showPw.type = "text";
    }
    else {
        showPw.type = "password";
    }

}