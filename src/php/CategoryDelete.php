<?php

include 'config.php';

$catDelete = $_GET['id']; // get id through query string

$sql = "DELETE FROM  bookcategory  WHERE Id = $catDelete"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alert('Record Deleted Successfully!!!')</script>";
            header("Location:Category.php");
        }
        else{

            echo"<script> alert('Error in Delete  record')</script>";
        }
        mysqli_close($conn);
?>