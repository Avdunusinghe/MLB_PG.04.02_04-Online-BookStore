function validateLogin(){

    //asign value 
    var username = document.getElementById("adusername").value; 
    var password = document.getElementById("adpassword").value;

    //check user name not null
    if(username == null || username ==""){   

        alert("Please enter your username");
        return false;
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