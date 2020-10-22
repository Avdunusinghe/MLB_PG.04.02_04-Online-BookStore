<?php

include 'config.php';

$pDelete = $_GET['id']; // get id through query string

$sql = "DELETE FROM  publisher  WHERE Id = $pDelete"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alert ('Category Delete Successfully!!!')</script>";
            header("Location:Publisher.php");
        }
        else{

            echo"<script> alert ('Delete fail')</script>";
        }
        mysqli_close($conn);
?>