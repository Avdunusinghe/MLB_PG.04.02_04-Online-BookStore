function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
  }


  function myFunction() {
    var x = document.getElementById('myDIV'); 
    //element will be invisible
    if (x.style.visibility === 'hidden') {      
      x.style.visibility = 'visible';
    } else {
      x.style.visibility = 'hidden';
    }
  }