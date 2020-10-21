<?php

include_once 'config.php';
//Books Table sql dbOperations
$bookInventoryId = $_POST["bookInvetoryId"];
$bookName = $_POST["bookName"];
$bIsbn = $_POST["bookIsbn"];
$bPrice = $_POST["bookPrice"];
$bAthorId = $_POST["bookAuthor"];
$bPublisherId = $_POST["bookPublisherId"];
$bQty = $_POST["bookQuntity"];
$bImage = $_POST["bookImg"];

$sql = "insert into books (Id, BookCategoryId, BookTitle, ISBN, Price, AuthorId, PublisherId, AvailableQty, BookImage,IsActive)
VALUES('', $bookInventoryId, '$bookName', $bIsbn, $bPrice, $bAthorId, $bPublisherId, $bQty, '$bImage',TRUE)";

if($conn->query($sql)){

    echo "insert successfully";
}
else {
    echo "Error:".$conn->error;
}

$conn->close();



?>