<?php

          include 'config.php';

         
          $pid=$_POST["id"];
          $pName = $_POST["bookCategoryName"];
          

          $sql = "UPDATE bookcategory SET Category='$pName' WHERE Id=$pid";
                    
         

            if(mysqli_query($conn,$sql)){

                echo"<script> alertt ('Record Insert Successfully!!!')</script>";
                header("Location:Publisher.php");
            }
            else{

                echo"<script> alertt ('Error in insert in record')</script>";
            }
            mysqli_close($conn);
?>