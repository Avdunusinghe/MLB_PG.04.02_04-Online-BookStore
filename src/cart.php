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
        <link rel="stylesheet" href="../src/Styles/slideShow.css">
        <link rel="stylesheet" href="../src/Styles/Aboutus.css">
        <link rel="stylesheet" href="../src/Styles/cart.css">

        <script src="../src/js/Home.js"></script>
        <Script src="../src/js/cart.js"></Script>
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
            <li><a href="#">Books<span>&#9661;</span></a>
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
            <li><a href="#">Request books</a></li>
            <?php 
                      if($_SESSION['usertype']== "Admin")
                      {
                        echo '<li><a href="../src/php/Books.php">Admin</a></li>';
                          
                      }
                  ?>
            <li><a href="#">About</a></li>
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
         
            

        <div class="cart"style = "float:right;position:relative;left:200px;top:10px;">
            <a href="../src/Home.html" class = "cart"><img src="../src/Images/Cart_1.png" alt="cart" width="60" height="50" ></a>
        </div>
  
        <div class="searchbar"style = "float:right;position:relative;left:2px;top:-30px;">
        <input type="text" name = "search" placeholder="Search..">
        </div> 
        </div>
        
            
      </nav>

        <!----------------------End of header section--------------------------------->
       
      <div align="center" style="margin-top: 15px;">
      <fieldset id="s_1sfieldset">
          
        <legend><h3 id="s_fontcolor">My Shopping Cart </h3> </legend>
        <fieldset id="s_2sfieldset">
        <img src ="../src/Images/book4.jpg" id="s_image" alt="Error">
        <br><br>
        <h4>The couple next door</h4>
        by Shari Lapena<br>
        ISBN 978-0-230-57354-3<br>
        Price : 350.00<br><br><br>
        Quantity      
       
        <input list = "hosting-plan" type = "text"><br><br>
        <datalist id ="hosting-plan" >  
        <option value = "1"/>
        <option value = "2"/>
        <option value = "3"/>
        <option value = "4"/>
        <option value = "5"/>
        </datalist>
                    
        <input type="submit" value= "Remove" id="fixedbutton" name="fixedbutton">
     
      </fieldset>


      <fieldset id="s_3sfieldset">
      <h4> <u>Order Summary</u></h4><br><br>
      Total Items : 2<br>
      Total Price : 725.00<br>
      Delivery Address : <br><br><br>
      
      <input type="submit" value="Pay Now" id="conpybtn" name="conpybtn" onclick= " check()"> 
      <h5 id="h_helpmasseje_demo" ></h5>  
      </fieldset>

          

      <fieldset id="s_4sfieldset">
          <img src ="../src/Images/book2.jpg" id="s_image" alt="Error">
          <br><br>
          <h4> Sidu Digasiya </h4> 
          by Hansi Ranasinghe <br>
          ISBN 978-0-230-57354-3<br>
          Price : 375.00<br><br><br>
       
          Quantity 
          <input list = "hosting-plan" type = "text" id="s_qnt" name="s_qnt" ><br><br>
          <datalist id ="hosting-plan" >  
            <option value = "1"/>
            <option value = "2"/>
            <option value = "3"/>
            <option value = "4"/>
            <option value = "5"/>
          </datalist>
        
        <input type="submit" value= "Remove" id="fixedbutton2" name="fixedbutton2">
                   
      </fieldset>

      </div>
        



</fieldset> 
      
<br><br>  
        <!--------------------------Footer below--------------------------------------> 
        <div class="footer">
          <div class="container">
            <div class="row-ft">
              <div class="footer-col1">
                <p>More: </p>
                <ul>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Abc</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">About us</a></li>
                </ul>
              </div>
              <div class="footer-col2">
                <p>More: </p>
                <ul>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Abc</a></li>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">About us</a></li>
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