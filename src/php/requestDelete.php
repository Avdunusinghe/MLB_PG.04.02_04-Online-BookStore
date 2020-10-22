<?php

include 'config.php';

$rDelete = $_GET['id']; // get id through query string

$sql = "DELETE FROM requestbooks  WHERE ReqId = $rDelete"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alert ('Client Msg Delete Successfully!!!')</script>";
            header("Location:Requestbook.php");
        }
        else{

            echo"<script> alert ('Rocrd delete faild')</script>";
        }
        mysqli_close($conn);
?>