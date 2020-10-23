<?php  

session_start();//session is a comming  store information (in variables) to  use go many pages.  
session_destroy();  // cloase the session
header("Location:loginpage.html");//use for the goto to login page 
?>  