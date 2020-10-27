<?php

include 'config.php';
// assign author table id
$aDelete = $_GET['id']; 

// delete query
$sql = "DELETE FROM  author  WHERE Id = $aDelete"; 





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