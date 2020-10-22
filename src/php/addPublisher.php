<?php

//include config file
include 'config.php';

 //eclare variables.
 $publisher = $_POST["bookPubName"];    

       $sql = "insert into publisher (Id, Name) VALUES ('','$publisher')";

       if(mysqli_query($conn,$sql)){

        echo"<script> alertt ('Record Insert Successfully!!!')</script>";
        header("Location:Publisher.php");
    }
    else{

        echo"<script> alertt ('Error in insert in record')</script>";
    }
    mysqli_close($conn);

?>