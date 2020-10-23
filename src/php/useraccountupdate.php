<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title>Buybooks</title>

        <link rel="stylesheet" href="../Styles/style.css">
        <link rel="stylesheet" href="../Styles/slideShow.css">
        <link rel="stylesheet" href="../Styles/createaccount.css">

        <Script src="../js/createanaccount.js"></Script>

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


        <!----------------------End of header section--------------------------------->
        <?php

                //conect to config.php .
                include 'config.php';
                
               
               
                //check whether press submit button
                if(isset($_POST["Update_btn"])){
                    
                    //this id value is come form this php file's form and it is the one which pointed to Update query , where condition
                    $id= $_POST["id"]; 
                    
                    
                    $firstName=$_POST["h_fname"];
                    $lastName=$_POST["h_lname"];
                    $dob=$_POST["h_dob"];
                    $gender=$_POST["h_gender"];
                    $email=$_POST["h_emailAdd"];
                    $contactNumber=$_POST["h_num"];
                    $address=$_POST["h_addr"];
                    $password=$_POST["h_rpwd"];
                
                    
                //Update query for update user values    
                $sql= "UPDATE users SET FirstName='$firstName',LastName='$lastName',Dob='$dob',Gender='$gender',Email='$email',MobileNo='$contactNumber',Address='$address',Password='$password' WHERE Id = $id";
                
                //check update success or not
                if ($conn->query($sql) === TRUE) {
                    //back to the relevant location.
                    header("Location:useraccount.php?id=$id");
                 
                  } 
                
                else {
                    echo "Error updating record: " . $conn->error;
                  }
    
                }
        ?>


        <?php
                // receive what sent useraccount Edit button url
                $user_id = $_GET['id'];


                //selet query for read values from the data base
                $sql = "select FirstName,LastName,Dob,Gender,Email,MobileNo,Address,Password from users where Id = $user_id";
                $result = $conn->query($sql);

               
                
                //read relevant row
                while($row= mysqli_fetch_array($result))
                {
                      $fName =$row['FirstName'];
                      $lName=$row["LastName"];
                      $dob=$row["Dob"];
                      $gender=$row["Gender"];
                      $email=$row["Email"];
                      $contactNumber=$row["MobileNo"];
                      $address=$row["Address"];
                      $password=$row["Password"];

                }

        ?>
    
        <p class="pages-journey"><a href="../Home.html">Home</a>  > <a href="useraccount.php"> User account</a> > Edit </p>
        <div id="h_backgraundimage">
          
          <center>
          
            <div id="form_crAcc">
                <form   action="useraccountupdate.php" target="_self" method="POST" onsubmit="return checkpassword()">
                    <h1 id="h_title">User account edit</h1>
                      <br>

                        <label>First name</label><br>
                            <input type="text" id="h_fname" name="h_fname"  placeholder="Enter your first name here" value=<?php echo $fName;?> required><br><br>
                        
                        <label>Last name</label><br>
                            <input type="text" id="h_lname" name="h_lname" placeholder="Enter your last name here" value=<?php echo $lName;?> required><br><br>

                        <label>Date of Birth</label><br>
                            <input type="date" id="h_dob" name="h_dob" value=<?php echo $dob;?>><br><br>
                        
                        <label>Gender</label><br>
                            <input type="radio" id="h_gender" name="h_gender" checked=<?php if($row['"Gender"'] = "Male") { echo "true"; }?> value="Male">Male
                            <input type="radio" id="h_gender" name="h_gender" checked=<?php if($row['"Gender"'] = "Female") { echo "true"; }?> value="Female">Female
                            <input type="radio" id="h_gender" name="h_gender" checked=<?php if($row['"Gender"'] = "Other") { echo "true"; }?> value="Other">Other<br><br>
                            

                        <label>Email</label><br>
                            <input type="email" id="h_emailAdd" name="h_emailAdd"  pattern="[a-zA-Z0-9._%+-]+@[a-z]+\.+[a-z]{2,3}" placeholder="Enter your email here" value=<?php echo $email;?> required><br><br>

                        <label>Contact Number</label><br>
                            <input type="text" id="h_num" name="h_num" pattern="[0-9]{10}" placeholder="Enter your last name here" value=<?php echo $contactNumber;?> required><br><br>

                        <label>Address</label><br>
                            <textarea  id="h_addr" name="h_addr" rows="6" cols="50" placeholder="Enter your address here"  required><?php echo $address;?></textarea><br><br>

                        <label>Password</label><br>
                            <input type="password" id="h_pwd" name="h_pwd" style="width:500px;" placeholder="Enter your password here (between 5-10)" pattern="[a-zA-Z0-9]{5,10}" value=<?php echo $password;?> required><br><br>

                        <label>Re -enter Password</label><br>
                          <input type="password" id="h_rpwd" name="h_rpwd"style="width:500px;" placeholder="Re-enter your password here" value=<?php echo $password;?> required><br><br>
         
                        <center>
                            <a class="acolor1 acolor2 acolor3" href="../loginpage.html" >ALREADY HAVE AN ACCOUNT</a><br> <br> 
                        </center>
            
                          <!--this hidden text box does not show enything but it send id value to update query -->
                          <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                          
                          <input type="submit" id="h_btn1" name="Update_btn" value="Update" style="padding: 13px 224px;"  >
                          
        
                </form>

          </div>
          </center>

        </div>


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