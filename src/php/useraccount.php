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
        <p class="pages-journey"><a href="../Home.html">Home</a>  >  User account</p>
        <div id="h_backgraundimage">

        
        
          
        <center>
            
        <h1 id="h_title">User account</h1><br><br>

        <?php

                //conect to config.php .
                include 'config.php';

                $id = $_GET['id'];
                
                //selet query for read values from the data base
                $sql = "select Id,FirstName,LastName,Dob,Gender,Email,MobileNo,Address,Password from users where Id =$id";
                $result = $conn->query($sql);
               
              
                
                //read relevant row values
                while($row= mysqli_fetch_array($result))
                {      
                      $userID = $row["Id"];
                      $fName =$row["FirstName"];
                      $lName=$row["LastName"];
                      $dob=$row["Dob"];
                      $gender=$row["Gender"];
                      $email=$row["Email"];
                      $contactNumber=$row["MobileNo"];
                      $address=$row["Address"];
                 }

                    echo    "<table border='2' width='75%' >
                            <tr>
                               <th>Name</th>
                               <td>".$fName." ".$lName."</td>
                            </tr>
                            <tr>
                               <th>Date of birth</th>
                               <td>".$dob."</td>
                            </tr>
                            <tr>
                               <th>Gender</th>
                               <td>".$gender."</td>
                            </tr>
                            <tr>
                               <th>Email</th>
                               <td>".$email."</td>
                            </tr>
                            <tr>   
                               <th>Mobile No</th>
                               <td>".$contactNumber."</td> 
                            </tr>
                            <tr> 
                               <th>Address</th>
                               <td>".$address."</td>
                            </tr>
                            </table>";

       
        
            // when click the Edit button conect with useraccountupdate.php and send the ID using url 
            echo "<a href='useraccountupdate.php? id= $userID'> 
                           <button id='h_btn1' style='padding: 13px 540px;'>Edit</button>
                   </a>";
            
            echo  "<a href='useraccountdelete.php? id= $userID'> 
                           <button id='h_btn1' style='padding: 13px 500px;'>Delete Account</button>
                  </a>
                   <br><br><br><br><br><br>";
      ?>
    
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