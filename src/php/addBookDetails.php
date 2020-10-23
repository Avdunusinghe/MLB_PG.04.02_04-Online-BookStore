<?php

include_once 'config.php';
//Books Table sql dbOperations
$bookCategoryId = $_POST["bookInvetoryId"];
$bookName = $_POST["bookName"];
$bIsbn = $_POST["bookIsbn"];
$bPrice = $_POST["bookPrice"];
$bAthorId = $_POST["bookAuthor"];
$bPublisherId = $_POST["bookPublisherId"];
$bQty = $_POST["bookQuntity"];
$bImage = $_POST["bookImg"];

// insert data to book table query

$sql = "insert into books (Id, BookCategoryId, BookTitle, ISBN, Price, AuthorId, PublisherId, AvailableQty, BookImage,IsActive)
VALUES('', $bookCategoryId, '$bookName', $bIsbn, $bPrice, $bAthorId, $bPublisherId, $bQty, '$bImage',TRUE)";


//check query
if(mysqli_query($conn,$sql)){

    
    echo"<script> alert ('Record Insert Successfully!!!')</script>";
    header("Location:Books.php");
}
else{

    echo"<script> alert ('Error in insert in record')</script>";
}
mysqli_close($conn);



?>