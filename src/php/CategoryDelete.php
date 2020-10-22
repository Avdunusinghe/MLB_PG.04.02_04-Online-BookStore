<?php

include 'config.php';

$catDelete = $_GET['re']; // get id through query string

$sql = "DELETE FROM  bookcategory  WHERE Id = $catDelete"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:Category.php");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>