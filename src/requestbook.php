<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title>Buybooks</title>

        <link rel="stylesheet" href="../src/Styles/style.css">
        <link rel="stylesheet" href="../src/Styles/requestbook.css">

        <script src="../src\js\slidShow.js"></script> 
    </head>
    <body>     
      <div id="container">
        <nav>
          <div id="adsize">
            <a href="../src/Home.php" style=" float:left;position:absolute; left:60px; top:50px;"><img alt="logo" src="../src/Images/BuyBooks Logo.png" width="250" height="100"></a>
          </div>
        
            <div class ="adhover" style =" position:absolute; left:610px; top:100px;">
              <ul>
                  <li><a href="../src/Home.php">Home</a></li>
                  <li><a href="">Books <span>&#9661;</span></a>
                  <!-- First Tier Drop Down -->
                <ul>
                  <li><a href="#">Information Technology</a></li>
                  <li><a href="#">Software Engineering</a></li>
                  <li><a href="#">Machine Learning</a></li>
                  <li><a href="#">Enterprise Application Development</a></li>
                  <li><a href="#">Mobile Application Design & Development</a></li>
                  <li><a href="#">Deep Learning</a></li>
                  <li><a href="#">Parallel Computing</a></li>
                </ul >        
                </li>
                  
                  <li><a href="../src/requestbook.php">Request books</a></li>
                  <li><a href="../src/contactus.php">Contact US</a></li>
                  <li><a href="../src/Aboutus.php">About Us</a></li>
                  <?php 
                      if($_SESSION['usertype']== "Admin")
                      {
                        echo '<li><a href="../src/php/Books.php">Admin</a></li>';
                          
                      }
                  ?>
                 
              </ul>
            </div>



            <?php 
            if($_SESSION['username'])
            {
              echo '<a href="logOut.php" class = "loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;">Logout</a>';
              $id= $_SESSION['id'];
              echo '<a class = "loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;" href="php/useraccount.php?id=' . urlencode($id) . '">User Profile</a>';
            }
            else
            {
             echo '<a href="../src/loginpage.html" class = "loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;">Sign in |</a>';
             echo '<a href="../src/createaccount.html" class= "adsignupbtn" style="float:right; position:relative;left: 160px;top:-90px;">Sign Up</a>';
            }

            ?>

            



            

            <div class="cart"style = "float:right;position:relative;left:200px;top:-3px;">
                <a href="../src/cart.html" class = "cart"><img src="../src/Images/Cart_1.png" alt="cart" width="35" height="40" style="color: white;"></a>
               
            </div>
  
           <div style = "float:right;position:relative;left:-70px;top:-90px;">
                  <div class="adsearchBox">
                    <input class="adsearchInput"type="text" name="" placeholder="Search">
                      <button class="adsearchButton" href="#">
                            search
                      </button>
                  </div>  
          </div>
        </nav>
         
      </div>



      <!--------------------------------end of header------------------------------------------->
      <p class="pages-journey"><a href="../src/Home.html">Home</a>  >  Request books</p>

      <center>
          <h1>Request Books</h1>
          <div class="sprqbook">
             <form action ="../src/php/reqbook.php" target="_self" method="POST" >
                  <lebal>Your name</lebal><br><br>
                  <input type="text" placeholder="Enter your name"style="width: 470px;height:40px;"id="spname" name="spname" required><br><br>

                  <label>Contact Number</label><br><br>
                  <input type="text" placeholder="Enter your Contact Number" style="width: 470px;height:40px;" id="sppnum" name="sppnum" required><br><br>

                  <label>Email</label><br><br>
                  <input type="text" placeholder="Enter your Email"style="width: 470px;height:40px;"id="spemail" name="spemail" pattern="[a-zA-Z0-9._%+-]+@[a-z]+\.+[a-z]{2,3}" required><br><br>

                  <lebel>Books You are Looking for</lebel><br><br>
                  <textarea style="width: 470px;height:40px;"id="spbdetails" name="spbdetails" required></textarea><br><br>

                  
                  <input class="spsubmitbtn" type="submit" name="" id="submit" value="Submit" onclick="validatRequestBookDetail();"><br><br>                    

            </form>
          </div>
      </center>







        <!--------------------------Footer below--------------------------------------> 
        <div class="footer">
          <div class="container">
            <div class="row-ft">
              <div class="footer-col1">
                <p><b>More useful links</b></p>
                <ul>
                  <li><a href="../src/Aboutus.php">About us</a></li>
                  <li><a href="../src/contactus.php">Contact is</a></li>
                  <li><a href="../src/requestbook.php">Request books</a></li>
                  <li><a href="../src/privacyPolicy.php">Privacy policy</a></li>
                </ul>
              </div>
              <div class="footer-col2">
                <p><b>Follow us on- </b></p>
                <ul>
                  <li><a href="#">FaceBook</a></li>
                  <li><a href="#">Twitter</a></li>
                  <li><a href="#">Instergram</a></li>
                  <li><a href="#">YouTube</a></li>
                </ul>
              </div>
              <div class="footer-col3">
                <img src="../src/Images/BuyBooks Logo.png" alt="Error" height="90">
                <h3>Contact us</h3>
                <p>13A, Main street, <br>Colombo 06.<br>contact@buybooks.lk</p>
              </div>
              <div class="footer-col4">
                <img src="../src/Images/app-store.png" alt="Error" width="120px">
                <img src="../src/Images/play-store.png" alt="Error" width="120px">
              </div>
            </div>
            <hr width="100%">
            <div class="last-ele">
              <p>@All rights received.</p>
              <img src="../src/Images/card-logos.png" alt="Error" height="30px">
            </div>
          </div>
        </div>     
        <!----------------------Footer end--------------------------------->

    </body>
</html>