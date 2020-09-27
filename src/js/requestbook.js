function validatRequestBookDetail() {

    var yrname = document.getElementById("spname").Value;
    var pnum = document.getElementById("sppnum").Value;
    var email = document.getElementById("spemail").Value;
    var bookDetails = document.getElementById("spbdetails").Value;

    

    if (yrname == null || yrname == "") {

        alert("Please enter your Name");
        return false;

    }

    if (pnum == null || pnum == "") {

        alert("please enter your Mobile Number");
        return false;
    }

    if (email == null || email == "") {

        alert("please enter your Email");
        return false;
    }

    if (bookDetails == null || bookDetails == "") {

        alert("please enter your book deatils");
        return false;
    }

    else {

        alert('Your request submited');

    }
}