<?php

          include 'config.php';

         
          $pid=$_POST["id"];
          $pName = $_POST["bookCategoryName"];
          

          $sql = "UPDATE bookcategory SET Category='$pName' WHERE Id=$pid";
                    
         

            if(mysqli_query($conn,$sql)){

                echo"<script> alert ('Record Update Successfully!!!')</script>";
                header("Location:Publisher.php");
            }
            else{

                echo"<script> alertt ('Error data update ')</script>";
            }
            mysqli_close($conn);
?>