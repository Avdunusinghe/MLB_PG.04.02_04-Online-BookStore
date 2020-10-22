<?php

include 'config.php';

$pDelete = $_GET['id']; // get id through query string

$sql = "DELETE FROM  publisher  WHERE Id = $pDelete"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:Publisher.php");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>