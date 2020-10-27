<?php

          include 'config.php';

         //sql part author
          $aid=$_POST["id"];
          $aName = $_POST["bookAuthorName"];
          

          $sql = "UPDATE author SET Name='$aName' WHERE Id=$aid";
                    
         

            if(mysqli_query($conn,$sql)){

                echo"<script> alertt ('Record Insert Successfully!!!')</script>";
                header("Location:Author.php");
            }
            else{

                echo"<script> alertt ('Error in insert in record')</script>";
            }
            mysqli_close($conn);
?>