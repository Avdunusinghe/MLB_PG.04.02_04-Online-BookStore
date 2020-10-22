<?php

//include config file
include 'config.php';

 //eclare variables.
 $author = $_POST["bookAuthorName"];    
    
        //insert to data author table
       $sql = "insert into author (Id, Name) VALUES ('','$author')";

        //check connection
        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:Author.php");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>