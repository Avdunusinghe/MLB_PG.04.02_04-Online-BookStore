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
        <link rel="stylesheet" href="../src/Styles/CategoriesSubPages.css">

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

        <!----------------------End of header section--------------------------------->
        <p class="pages-journey"><a href="../src/Home.html">Home</a>  >  Privacy policy</p>
        
        <div class="pp-container">
          <h3>Privacy policy</h3>
          <p class="pp-p1">Welcome to Buybooks. Because we are committed to protecting your privacy in all aspects of our business, we hope you will take the time to read this policy, 
            which explains what information we collect from you and how we use that information. 
            By using our websites or purchasing products or services from us, you agree to be bound by this policy. 
            If we decide to change our privacy policy, we will post those changes on this page so that you are always aware of what information we collect and how we use it. 
            Please check back periodically.</p>
          
          <h2 class="pp-sub-topic">We are collect,</h2>
          <ul class="norm-para" class="ppul">
            <li>Your contact information including Email address</li>
            <li>other information relevant to customer surveys and/or offers</li>
          </ul>

          <h2 class="pp-sub-topic">About order items</h2>

          <p class="norm-para">To order from us or use other Buybooks Services (as defined in our Terms of Use),
            you must set up a Buybooks account. Setting up an account requires you to provide your email
            address and to choose a password (your "Account Information"). When you order from us, we also ask
            for your name, shipping address, telephone number, and credit card number, billing address, 
            and expiration date (your "Order Information"). This information is necessary for us to process your order, 
            to notify you of your order status, and to fulfil orders. We do not save your credit card information and 
            payments are processed through a 3rd payment payment gateway provider.</p>
          
            <h2 class="pp-sub-topic">Contact via E-mail</h2>

            <p class="norm-para">Email messages from Buybooks - If you register as a Buybooks customer,
              Buybooks may send to you email or other communications containing information about Buybooks and other 
              matters Buybooks believes will interest you. At any time you may alter your communications preferences 
              by logging into your account and choosing which email communications you want to receive in your 
              Email Preferences. Also, each email Buybooks sends to you will tell you how to decline further 
              unsolicited email. From time to time, Buybooks may also send you email containing important 
              information regarding the website, which you may not opt out of receiving.</p>

            <h2 class="pp-sub-topic">About using cookies</h2>

            <p class="norm-para">A cookie is a small file which asks permission to be placed on your computer's 
              hard drive. Once you agree, the file is added and the cookie helps analyse web traffic or lets you know 
              when you visit a particular site. Cookies allow web applications to respond to you as an individual. The 
              web application can tailor its operations to your needs, likes and dislikes by gathering and remembering 
              information about your preferences.<br><br>
              
              cookies help us provide you with a better website, by enabling us to monitor which pages you find useful 
              and which you do not. A cookie in no way gives us access to your computer or any information about you, 
              other than the data you choose to share with us. You can choose to accept or decline cookies. Most web 
              browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies 
              if you prefer. This may prevent you from taking full advantage of the website.
            </p>
            
            <h2 class="pp-sub-topic">About security</h2>

            <p class="norm-para">This website has security measures in place to protect the loss, misuse, and alteration 
              of the information under our control. When you place orders or access your account information, we use a 
              secure server. The secure server layer (SSL) encrypts all information you input before it is sent to us. 
              All of the customer data we collect is similarly protected against unauthorized access.</p>

            <h2 class="pp-sub-topic">Controlling your personal information</h2>

            <p class="norm-para">We will not sell, distribute or lease your personal information to third parties unless 
              we have your permission or are required by law to do so. We may use your personal information to send you 
              promotional information about third parties which we think you may find interesting if you tell us that 
              you wish this to happen.<br><br>
              You may request details of personal information which we hold about you under the Data Protection Act 1998. 
              A small fee will be payable. If you would like a copy of the information held on you please email us this 
              request using our Contact Us information. <br><br>
              If you believe that any information we are holding on you is incorrect or incomplete, please write to or 
              email us as soon as possible, at the above address. We will promptly correct any information found to be 
              incorrect.
            </p>

        </div>


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