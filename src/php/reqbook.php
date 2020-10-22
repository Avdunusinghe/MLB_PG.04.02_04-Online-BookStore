<?php

include 'config.php';

$cName = $_POST["spname"];
$cNumber = $_POST["sppnum"];
$cEmail = $_POST["spemail"];
$cBookDetails = $_POST["spbdetails"];

$sql = "insert into requestbooks (ReqId ,Name, ContactNo, Email,BookReq) VALUES ('','$cName',$cNumber,'$cEmail','$cBookDetails')";



        if(mysqli_query($conn,$sql)){

            echo"<script> alert ('Record Insert Successfully!!!')</script>";
            header("Location:../src/Home.html");
        }
        else{

            echo"<script> alert ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>