<?php

include 'config.php';

$cName = $_POST["spname"];
$cNumber = $_POST["sppnum"];
$cEmail = $_POST["spemail"];
$cBookDetails = $_POST["spbdetails"];

$sql = "insert into requestbooks (ReqId ,Name, ContactNo, Email,BookReq) VALUES ('','$cName',$cNumber,'$cEmail','$cBookDetails')";

/*if($conn->query($sql)){

    echo "insert successfully";
}
else {
    echo "Error:".$conn->error;
}

$conn->close();*/

        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:Home.html");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>