<?php

//include config file
include 'config.php';

 //eclare variables.
 $publisher = $_POST["bookPubName"];    

        //insert publisher query 
       $sql = "insert into publisher (Id, Name) VALUES ('','$publisher')";

       if(mysqli_query($conn,$sql)){

        echo"<script> alert('Record Insert Successfully!!!')</script>";
        header("Location:Publisher.php");
    }
    else{

        echo"<script> alert('Error in insert in record')</script>";
    }
    //close connection
    mysqli_close($conn);

?>