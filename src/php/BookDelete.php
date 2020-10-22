<?php

include 'config.php';

$id = $_GET['id']; // get id through query string

$sql = "UPDATE Books SET IsActive = 0 WHERE Id = $id"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alert ('Book Delete  Successfully!!!')</script>";
            header("Location:Books.php");
        }
        else{

            echo"<script> alert ('Book Delete faild')</script>";
            header("Location:Books.php");
        }
        mysqli_close($conn);
?>