  
<?php
//session start enable
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">

        <title>Buybooks</title>

        <link rel="stylesheet" href="../Styles/style.css">
        <link rel="stylesheet" href="../Styles/admin.css">
      

       
    </head>
    <body>     
      <div id="container">
        <nav>
          <div id="adsize">
            <a href="../Home.php" style=" float:left;position:absolute; left:60px; top:50px;"><img alt="logo" src="../Images/BuyBooks Logo.png" width="250" height="100"></a>
          </div>
        
            <div class ="adhover" style =" position:absolute; left:610px; top:100px;">
              <ul>
                  <li><a href="../Home.php">Home</a></li>
                  <li><a href="../CategoriesSubPage1.html">Books <span>&#9661;</span></a>
                  <!-- First Tier Drop Down -->
                <ul>
                  <li><a href="">Information Technology</a></li>
                  <li><a href="../src/CategoriesSubPage1.html">Software Engineering</a></li>
                  <li><a href="../src/CategoriesSubPage1.html">Machine Learning</a></li>
                  <li><a href="../src/CategoriesSubPage1.html">Enterprise Application Development</a></li>
                  <li><a href="../src/CategoriesSubPage1.html">Mobile Application Design & Development</a></li>
                  <li><a href="../src/CategoriesSubPage1.html">Deep Learning</a></li>
                  <li><a href="../src/CategoriesSubPage1.html">Parallel Computing</a></li>
                </ul >        
                </li>
                  
                  <li><a href="../src/requestbook.php">Request books</a></li>
                  <li><a href="../src/contactus.php">Contact Us</a></li>
                  <li><a href="../src/Aboutus.php">About Us</a></li>
                  <?php 
                      if($_SESSION['usertype']== "Admin")
                      {
                        echo '<li><a href="../php/Books.php">Admin</a></li>';
                          
                      }
                  ?>
                 
              </ul>
            </div>



            <?php 
            if($_SESSION['username'])
            {

              echo '<a href="../logOut.php" class = "loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;">Logout</a>';
              //get session id 
              $id= $_SESSION['id'];
              echo '<a class = "loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;" href="../php/useraccount.php?id=' . urlencode($id) . '">User Profile</a>';

            }
            else
            {
             echo '<a href="../loginpage.html" class = "loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;">Sign in |</a>';
             echo '<a href="../createaccount.html" class= "adsignupbtn" style="float:right; position:relative;left: 160px;top:-90px;">Sign Up</a>';
            }

            ?>

            



            

            <div class="cart"style = "float:right;position:relative;left:200px;top:-3px;">
                <a href="../src/cart.html" class = "cart"><img src="../Images/Cart_1.png" alt="cart" width="35" height="40" style="color: white;"></a>
               
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
       <!-----------------------------End of header section---------------------------------->
       

     <table style="width:100%">
        <tr>
            <td style="width: 10%;">
                <div class="addminPanel">
                    <ul>
                    <li><a href="../php/Category.php">Category</a></li>
                        <li><a href="../php/Publisher.php">Publisher</a></li>
                        <li><a href="../php/Author.php">Author</a></li>
                        <li><a href="../php/Books.php">Books</a></li>
                        <li><a href="../php/Client.php">Client Management</a></li>
                        <li><a href="../php/ClientMsg.php">Messeges</a></li>
                        <li><a href="../php/Requestbook.php">Book Request</a></li>
                    </ul>
                </div>                
            </td>
            <td style="width: 50%;">
                <table id="customers">
                    <tr>
                        <th style="width:15%;">
                            
                            <a class=addButton href="../addAuthor.html">Add Author</a>
                        </th>
                        <th style="width: 10%;">Id</th>
                        <th style="width: 90%;">Name</th>
                    </tr>
                      <?php
                        // include coonfig file

                        include 'config.php';

                        // show details author tavle using select query

                        $Sql = "select * from author";

                        //check query 
                        $result = $conn->query($Sql);

                        //returns the number of rows in a result set.
                        if($result->num_rows>0){
                        
                        //function fetches a result row as an associative array.
                        while($row = $result->fetch_assoc()){
                            echo"<tr>
                            <td><a class='addButton' id=deleteCategory href='editauthor.php?id=$row[Id]&aname=$row[Name]'>Edit</a>
                            <a class='delButton' id=deleteCategory href='authorDelete.php?id=$row[Id]'>Delete</a></td>
                            <td>".$row["Id"]."</td>
                            <td>".$row["Name"]."</td>
                            </tr>";
                        }
                        }
                        else{

                        echo"Result Not Found";

                        }
                        
                        echo" </table>";
                        $conn->close();
                     ?> 
                    
            </td>
        </tr>
    </table>
    
    
    


  
 <!--------------------------Footer below--------------------------------------> 
 <div class="footer">
    <div class="container">
      <div class="row-ft">
        <div class="footer-col1">
          <p><b>More useful links</b></p>
          <ul>
            <li><a href="../src/Aboutus.html">About us</a></li>
            <li><a href="../src/contactus.html">Contact is</a></li>
            <li><a href="../src/requestbook.html">Request books</a></li>
            <li><a href="../src/privacyPolicy.html">Privacy policy</a></li>
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