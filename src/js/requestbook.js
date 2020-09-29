function validatRequestBookDetail() {

    var yrname = document.getElementById("spname").value;
    var pnum = document.getElementById("sppnum").value;
    var email = document.getElementById("spemail").value;
    var bookDetails = document.getElementById("spbdetails").value;

    console.log(yrname);

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