<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title>Buybooks</title>

        <link rel="stylesheet" href="../Styles/style.css">
        <link rel="stylesheet" href="../Styles/loginpage.css">

        <script src="../js/login.js"></script> 
        
    </head>
    <body>     
      <div id="container">
        <nav>
          <div id="adsize">
            <a href="../Home.html" style=" float:left;position:absolute; left:60px; top:50px;"><img alt="logo" src="../Images/BuyBooks Logo.png" width="250" height="100"></a>
          </div>
        
            <div class ="adhover" style =" position:absolute; left:610px; top:100px;">
              <ul>
                  <li><a href="../Home.html">Home</a></li>
                  <li><a href="#">Books <span>&#9661;</span></a>
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
                  <li><a href="../magazines.html">Magazines</a></li>
                  <li><a href="../requestbook.html">Request books</a></li>
                  <li><a href="../Aboutus.html">About Us</a></li>
              </ul>
            </div>


              <a href="../loginpage.html"class="loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;">Sign in |</a>
              <a href="../createaccount.html"class="adsignupbtn" style="float:right; position:relative;left: 160px;top:-90px;">Sign Up</a>
            

            <div class="cart"style = "float:right;position:relative;left:200px;top:-3px;">
                <a href="../Home.html" class = "cart"><img src="../Images/Cart_1.png" alt="cart" width="35" height="40" style="color: white;"></a>
               
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
      <!-----------------------------End of header section---------------------------------->
      <p class="pages-journey"><a href="../Home.html">Home</a>  >  Login</p>

    <center> 
          <div class="adloinbox">
            <h1>User Login</h1>
              <from  class="adloinbox" action="UserLogin.php" target="_self" method="POST">

                  <div class="adtextbox">
                    <div class="adbordercolor">
                      <leble>Email</leble> <br><br>
                       <input type="email"  placeholder="Email" id="adusername" name="userEmail" value="" style="width: 470px;height:40px;" > <br> <br>
                       <div style="display:none" id="adlUsernameValidator">
                         <label id="adlEmailValidation" style="color: red;"><span >&#10006;</span>Invalid email format</label><br><br>
                       </div>
                   </div>

                  <div class="adtextbox">
                      <lebel>Password</lebel><br><br>
                      <input type="password" placeholder="Password" id="adpassword" name="userPass"  value="" style="width: 470px;height:40px;" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  required><br><br>
                   </div>
                    </div>
                       
                   <div class="adpwcheckbox">
                     <input type="checkbox" onclick="adShowPassword()">Show Password
                   </div> 

                  <div class="adlgbtn">
                      <input class="adlgbtn1"  type="button" name="" id="submit" value="Login" onclick="validateLogin()"><br><br>
                     <a href="../createaccount.html">Sign Up</a>
                  </div>
                    <br><br>
                    
                         <a href="https://www.facebook.com/" class = "adfblogo"><img src="../Images/IMG_FBICON.png" alt="fblogo" width="230" height="33" ></a>
                         <a href="https://mail.google.com/" class = "adgooglelogo"><img src="../Images/lMG_GOOGLE.png" alt="googlelogo" width="230" height="33" ></a> <br><br><br>

                        
                            

                  <div class="adfopw">
                       <center>
                         <a href="../Fogotpassword.html">FORGOT PASSWORD ?</a><br> <br><br>
                       </center>
                  </div>
          
              </from>
          </div>
    </center> 
    
    
     











      
        <!--------------------------Footer below--------------------------------------> 
        <div class="footer">
          <div class="container">
            <div class="row-ft">
              <div class="footer-col1">
                <p><b>More useful links</b></p>
                <ul>
                  <li><a href="../Aboutus.html">About us</a></li>
                  <li><a href="../contactus.html">Contact is</a></li>
                  <li><a href="../requestbook.html">Request books</a></li>
                  <li><a href="../privacyPolicy.html">Privacy policy</a></li>
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
                <img src="../Images/BuyBooks Logo.png" alt="Error" height="90">
                <h3>Contact us</h3>
                <p>13A, Main street, <br>Colombo 06.<br>contact@buybooks.lk</p>
              </div>
              <div class="footer-col4">
                <img src="../Images/app-store.png" alt="Error" width="120px">
                <img src="../Images/play-store.png" alt="Error" width="120px">
              </div>
            </div>
            <hr width="100%">
            <div class="last-ele">
              <p>@All rights received.</p>
              <img src="../Images/card-logos.png" alt="Error" height="30px">
            </div>
          </div>
        </div>     
        <!----------------------Footer end--------------------------------->

    </body>
</html>