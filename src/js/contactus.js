function validateContactUsDetails(){
    var sname = document.getElementById("snName").Value;
    var cnumber = document.getElementById("snCnumber").Value;
    var email = document.getElementById("snEmail").Value;
    var message = document.getElementById("snMsg").Value;

    if(sname == null || sname == ""){
        alert("Enter your name");
        return false;
    }
    if(cnumber == null || cnumber == ""){
        alert("Enter your contact number");
        return false;
    }
    if(email == null || email == ""){
        alert("Enter your email");
        return false;
    }
    if(message == null || email ==""){
        alert("Enter your message");
        return false;
    }
    else{
        alert("Submit your Message");
    }
}