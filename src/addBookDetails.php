<?php

// include config file
include 'config.php'

//Enter book category detail dboperation

$bookcategory = $_POST["bookCategoryName"];

$sql = "inset into bookcategory (Category) values ('', '$bookcategory')";

if($conn->query($sql)){

    echo "insert successfully";
}
else {
    echo "Error:".$conn->error;
}

$conn->close();


//Books Table sql dbOperations
$bookInventoryId = $_POST["bookInvetoryId"];
$bookName = $_POST["bookName"];
$bIsbn = $_POST["bookIsbn"];
$bPrice = $_POST["bookPrice"];
$bAthorId = $_POST["bookAuthor"];
$bPublisherId = $_POST["bookPublisherId"];
$bQty = $_POST["bookQuntity"];
$bImage = $_POST["bookImg"];

$sql = "insert into books (BookCategoryId, BookTitle, ISBN, Price, AuthorId, PublisherId, AvailableQty, BookImage) 
values ('', $bookInventoryId, '$bookName', $bIsbn, $bPrice, $bAthorId, $bPublisherId, $bQty, $bImage)";

if($conn->query($sql)){

    echo "insert successfully";
}
else {
    echo "Error:".$conn->error;
}

$conn->close();

?>