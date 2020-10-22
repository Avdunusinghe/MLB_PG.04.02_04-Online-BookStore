<?php

include 'config.php';

$mDelete = $_GET['id']; // get id through query string

$sql = "DELETE FROM contactus  WHERE MsgId = $mDelete"; // delete query





        if(mysqli_query($conn,$sql)){

            echo"<script> alert ('Client Msg Delete Successfully!!!')</script>";
            header("Location:ClientMsg.php");
        }
        else{

            echo"<script> alert ('Rocrd delete faild')</script>";
        }
        mysqli_close($conn);
?>