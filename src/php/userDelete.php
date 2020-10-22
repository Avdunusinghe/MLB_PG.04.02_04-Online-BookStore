<?php

include 'config.php';

$id = $_GET['it']; // get id through query string

$sql = "UPDATE users SET IsActive = 0 WHERE Id = $id"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:Client.php");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>