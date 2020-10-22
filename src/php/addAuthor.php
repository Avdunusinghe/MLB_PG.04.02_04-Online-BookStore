<?php

//include config file
include 'config.php';

 //eclare variables.
 $author = $_POST["bookAuthorName"];    
    
        //insert to data author table
       $sql = "insert into author (Id, Name) VALUES ('','$author')";

        //check connection
        if(mysqli_query($conn,$sql)){

            echo"<script> alert ('Record Insert Successfully!!!')</script>";
            header("Location:Author.php");
        }
        else{

            echo"<script> alert ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>