<?php

include 'config.php';

$aDelete = $_GET['id']; // get id through query string

$sql = "DELETE FROM  author  WHERE Id = $aDelete"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alert('Athot Delete Successfully!!!')</script>";
            header("Location:Author.php");
        }
        else{

            echo"<script> alert('Books Table Use this Book')</script>";
            header("Location:Author.php");
        }
        mysqli_close($conn);
?>