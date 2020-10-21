<?php

include 'config.php';

$categoryEdit = $_POST['re']; // get id through query string
$categoryName = $_POST['cname'];
//$sql = "DELETE FROM  bookcategory  WHERE Category = $categoryEdit"; // delete query

$sql = "UPDATE bookcategory SET Category='$categoryName' WHERE Id=$categoryEdit";

/*if($conn->query($sql)){

    echo "insert successfully";
}
else {
    echo "Error:".$conn->error;
}

$conn->close();*/

        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:C:editcategoryfr.php");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);
?>