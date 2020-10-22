<?php

//include config file
include 'config.php';

 //eclare variables.
 $category = $_POST["bookCategoryName"];
   
       $sql = "insert into bookcategory (Id, Category) VALUES ('', '$category')";


       /* if($conn->query($sql)){

            echo "insert successfully";
        }
        else {
            echo "Error:".$conn->error;
        }

        $conn->close();*/




        if(mysqli_query($conn,$sql)){

            echo"<script> alertt ('Record Insert Successfully!!!')</script>";
            header("Location:Category.php");
        }
        else{

            echo"<script> alertt ('Error in insert in record')</script>";
        }
        mysqli_close($conn);

//Books Table sql dbOperations
/*$bookInventoryId = $_POST["bookInvetoryId"];
$bookName = $_POST["bookName"];
$bIsbn = $_POST["bookIsbn"];
$bPrice = $_POST["bookPrice"];
$bAthorId = $_POST["bookAuthor"];
$bPublisherId = $_POST["bookPublisherId"];
$bQty = $_POST["bookQuntity"];
$bImage = $_POST["bookImg"];

$sql = "insert into books (Id, BookCategoryId, BookTitle, ISBN, Price, AuthorId, PublisherId, AvailableQty, BookImage) 
values ('', $bookInventoryId, '$bookName', $bIsbn, $bPrice, $bAthorId, $bPublisherId, $bQty, $bImage)";

if($conn->query($sql)){

    echo "insert successfully";
}
else {
    echo "Error:".$conn->error;
}

$conn->close();*/



?>