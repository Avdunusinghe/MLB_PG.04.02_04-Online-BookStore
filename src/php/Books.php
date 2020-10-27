 
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
             <a href="../Home.php" style=" float:left;position:absolute; left:60px; top:50px;"><img alt="logo" src="../Images/BuyBooks Logo.png" width="250" height="100"></a>
           </div>
         
             <div class ="adhover" style =" position:absolute; left:610px; top:100px;">
               <ul>
                   <li><a href="../src/Home.php">Home</a></li>
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
                   <li><a href="../src/requestbook.php">Request books</a></li>
                   <li><a href="../src/Aboutus.php">About Us</a></li>
               </ul>
             </div>
 
 
               <a href="../src/loginpage.html"class="loginbtn" style = "float:right; position:relative;left: 0px;top:-90px;">Sign in |</a>
               <a href="../src/createaccount.html"class="adsignupbtn" style="float:right; position:relative;left: 160px;top:-90px;">Sign Up</a>
             
 
             <div class="cart"style = "float:right;position:relative;left:200px;top:-3px;">
                 <a href="../src/Home.html" class = "cart"><img src="../Images/Cart_1.png" alt="cart" width="35" height="40" style="color: white;"></a>
                
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
                            
                            <a class=addButton href="../addBooks.html">Add Books</a>
                        </th>
                        <th style="width: 10%;">Id</th>
                        <th style="width: 20%;">Book Category ID</th>
                        <th style="width: 20%;">Book Title</th>
                        <th style="width: 20%;">ISBN</th>
                        <th style="width: 20%;">Price</th>
                        <th style="width: 20%;">Author ID</th>
                        <th style="width: 20%;">Publisher ID</th>
                        <th style="width: 20%;">AvailableQty</th>
                        <th style="width: 20%;">Book Image</th>
                    </tr>
                      <?php
                        include 'config.php';
                        $Sql = "select * from books where IsActive = 1";

                        $result = $conn->query($Sql);

                        if($result->num_rows>0){

                        while($row = $result->fetch_assoc()){
                            echo"<tr>
                            <td><a class='addButton' id=deleteCategory href='editBoooks.php?
                            id=$row[Id]&cid=$row[BookCategoryId]&tid=$row[BookTitle]&isbn=$row[ISBN]&pr=$row[Price]&atr=$row[AuthorId]&pid=$row[PublisherId]&qty=$row[AvailableQty]&bimg=$row[BookImage]'>Edit</a>
                            <a class='delButton' id=deleteCategory href='BookDelete.php?id=$row[Id]'>Delete</a></td>                            
                            <td>".$row["Id"]."</td>
                            <td>".$row["BookCategoryId"]."</td>
                            <td>".$row["BookTitle"]."</td>
                            <td>".$row["ISBN"]."</td>
                            <td>".$row["Price"]."</td>
                            <td>".$row["AuthorId"]."</td>
                            <td>".$row["PublisherId"]."</td>
                            <td>".$row["AvailableQty"]."</td>
                            <td>".$row["BookImage"]."</td>                    
                            </tr>";
                        }
                        }
                        else{
                        //echo"Result Not Found";
                        echo"<script> alert ('Result Not Found')</script>";
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