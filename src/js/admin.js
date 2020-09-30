function OpenAdminPanel() {
    document.getElementById("mySidenav").style.width = "250px";
  }
  
  function claseAdminPanel() {
    document.getElementById("mySidenav").style.width = "0";
  }


  function showAdminFunction() {
    var x = document.getElementById('adminSetting'); 
    //element invisible
    if (x.style.visibility === 'hidden') {      
      x.style.visibility = 'visible';
    } else {
      x.style.visibility = 'hidden';
    }
  }