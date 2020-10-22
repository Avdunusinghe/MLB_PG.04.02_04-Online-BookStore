<?php

include 'config.php';

$aDelete = $_GET['re']; // get id through query string

$sql = "DELETE FROM  author  WHERE Id = $aDelete"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:Author.php");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>