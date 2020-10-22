



<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title>Buybooks</title>

        <link rel="stylesheet" href="../Styles/style.css">
        <link rel="stylesheet" href="../Styles/admin.css">

        <script src="../js/admin.js"></script> 
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
        <?php
          
           //echo $_POST['re'];
          // echo $_POST['cname'];
        ?>

        <center>
            <div class="adbkupload">
                <h2>Add New Authors</h2>

                <form method="POST" action="addAuthor.php">

                    <label>Id<label> <br>
                    <input type="text" name="id" readonly name="id"value="<?php echo $_REQUEST['re']?>" style="width: 270px;height:30px;"> <br>

                    <lebel>Enter Author's Name</lebel> 
                    <input type="text" name="bookAuthorName"  value="<?php echo $_REQUEST['aname']?>" style="width: 270px;height:30px;"><br><br>

                    <input class="adlgbtn1"  type="submit" name="" id="submit" value="Submit" onclick="addAuthorValidation()">
                    <input type="reset" class="adlgbtnReset" id="resetBookDetails" name="##" value="Reset"> <br><br>
                
                </form>
            
            </div>
            
            </center>

            <center>
        <div class="adbkupload">
          <h2>Add New Book</h2>
  
          <form method="POST" action="updateBooks.php">

              <label>Id<label> <br>
              <input type="text" name="id" readonly name="id"value="<?php echo $_REQUEST['id']?>" style="width: 270px;height:30px;"> <br>            
  
              <lebel>Enter Book Inventory Id</lebel> <br>
              <input type="text" name="bookInvetoryId"  value="<?php echo $_REQUEST['cid']?>"style="width: 270px;height:30px;" required><br><br>
              
              <lebel>Enter Book Title</lebel><br>
              <input type="text" name="bookName"  value="<?php echo $_REQUEST['tid']?>"style="width: 270px;height:30px;" required><br><br>
  
              <lebel>Enter Book ISBN</lebel><br>
              <input type="text" name="bookIsbn" value="<?php echo $_REQUEST['isbn']?>" style="width: 270px;height:30px;" required><br><br>
              
              <lebel>Enter Book Price</lebel><br>
              <input type="text" name="bookPrice" value="<?php echo $_REQUEST['pr']?>"style="width: 270px;height:30px;" required> <br><br>
            
              <lebel>Enter Book Author Id</lebel><br>
              <input type="text" name="bookAuthor" value="<?php echo $_REQUEST['atr']?>"style="width: 270px;height:30px;" required><br><br>
            
  
              <lebel>Enter Book Publisher Id</lebel><br>
              <input type="text" name="bookPublisherId"value="<?php echo $_REQUEST['pid']?>" style="width: 270px;height:30px;" required><br><br>
              
  
              <lebel>Enter Book Quantity</lebel><br>
              <input type="text" name="bookQuntity" value="<?php echo $_REQUEST['qty']?>" style="width: 270px;height:30px;" required><br><br>


              <lebel>Enter Book Image</lebel><br><br>
              <input type="file" name="bookImg" value="<?php echo $_REQUEST['bimg']?>" required><br><br>

              <input class="adlgbtn1"  type="submit" name="" id="submit" value="Upload" onclick="validateAdminBooksUpdate()">

              <input type="reset" class="adlgbtnReset" id="resetBookDetails" name="##" value="Reset"> <br><br>
            
  
          </form>
        
        </div>
        
      </center>
      

          

        

      








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