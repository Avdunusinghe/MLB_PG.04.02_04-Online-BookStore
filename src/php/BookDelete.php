<?php

include 'config.php';

$id = $_GET['re']; // get id through query string

$sql = "UPDATE Books SET IsActive = 0 WHERE Id = $id"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:Books.php");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>