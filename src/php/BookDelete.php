<?php


include 'config.php';

// get id through query string
$id = $_GET['id']; 

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