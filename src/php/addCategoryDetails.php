<?php

//include config file
include 'config.php';

 //eclare variables.
 $category = $_POST["bookCategoryName"];
        
 //insert to data book category Details
 $sql = "insert into bookcategory (Id, Category) VALUES ('', '$category')";

       ////check query
        if(mysqli_query($conn,$sql)){

            echo"<script> alert ('Record Insert Successfully!!!')</script>";
            header("Location:Category.php");
        }
        else{

            echo"<script> alert ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>