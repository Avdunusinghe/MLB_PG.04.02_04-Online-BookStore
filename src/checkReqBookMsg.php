<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title>Buybooks</title>

        <link rel="stylesheet" href="../src/Styles/style.css">
        <link rel="stylesheet" href="../src/Styles/requestbook.css">

        <script src="../src/js/requestbook.js"></script> 
    </head>
    <body>     
      <div id="container">
        <nav>
          <div id="adsize">
            <a href="../src/Home.html" style=" float:left;position:absolute; left:60px; top:50px;"><img alt="logo" src="../src/Images/BuyBooks Logo.png" width="250" height="100"></a>
          </div>
        
            <div class ="adhover" style =" position:absolute; left:610px; top:100px;">
              <ul>
                  <li><a href="../src/Home.html">Home</a></li>
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
                  <li><a href="../src/magazines.html">Magazines</a></li>
                  <li><a href="../src/requestbook.html">Request books</a></li>
                  <li><a href="../src/Aboutus.html">About Us</a></li>
              </ul>
            </div>


              <a href="../src/loginpage.html"class="loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;">Sign in |</a>
              <a href="../src/createaccount.html"class="adsignupbtn" style="float:right; position:relative;left: 160px;top:-90px;">Sign Up</a>
            

            <div class="cart"style = "float:right;position:relative;left:200px;top:-3px;">
                <a href="../src/Home.html" class = "cart"><img src="../src/Images/Cart_1.png" alt="cart" width="35" height="40" style="color: white;"></a>
               
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

        <center>
            <div class="clentMsg">
                <table border="1" width=100%>
                    <tr>
                        <th>Request No</th>
                        <th>Name</th>
                        <th>Contact Number</th>
                        <th>Email</th>
                        <th>Request Details</th>
                    </tr>
                    <?php
                        include 'config.php';
                        $Sql = "select * from requestbooks";

                        $result = $conn->query($Sql);

                        if($result->num_rows>0){

                          while($row = $result->fetch_assoc()){
                               echo"<tr><td>".$row["ReqId"]."</td>
                               <td>".$row["Name"]."</td>
                               <td>".$row["ContactNo"]."</td>
                               <td>".$row["Email"]."</td>
                               <td>".$row["BookReq"]."</td></tr>";
                           }
                        }
                        else{
                          echo"Result Not Found";
                        }
                        echo" </table>";
                        $conn->close();
                    ?>
               
            </div>