<?php

//conect to the sever
include 'config.php';

//assign variables 
$cName = $_POST["spname"];
$cNumber = $_POST["sppnum"];
$cEmail = $_POST["spemail"];
$cBookDetails = $_POST["spbdetails"];

//query 
$sql = "insert into requestbooks (ReqId ,Name, ContactNo, Email,BookReq) VALUES ('','$cName',$cNumber,'$cEmail','$cBookDetails')";



        if(mysqli_query($conn,$sql)){

            echo"<script> alert ('Record Insert Successfully!!!')</script>";
            header("Location:../requestbook.php");
        }
        else{

            echo"<script> alert ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>