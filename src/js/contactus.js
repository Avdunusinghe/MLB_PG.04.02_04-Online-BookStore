function validateContactUsDetails(){
    var sname = document.getElementById("snName").value;
    var cnumber = document.getElementById("snCnumber").value;
    var email = document.getElementById("snEmail").value;
    var message = document.getElementById("snMsg").value;

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
    if(message == null || message ==""){
        alert("Enter your message");
        return false;
    }
    else{
        alert("Message Submitted successfully!!");
    }
}