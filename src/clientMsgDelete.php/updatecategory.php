<?php

          include 'config.php';

         
          $cid=$_POST["id"];
          $categoryName = $_POST["bookCategoryName"];
          

          $sql = "UPDATE bookcategory SET Category='$categoryName' WHERE Id=$cid";
                    
         

            if(mysqli_query($conn,$sql)){

                echo"<script> alertt ('Record Insert Successfully!!!')</script>";
                header("Location:Category.php");
            }
            else{

                echo"<script> alertt ('Error in insert in record')</script>";
            }
            mysqli_close($conn);
?>