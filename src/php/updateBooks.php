<?php

          include 'config.php';

         

            $bid = $_POST["id"]
            $bookInventoryId = $_POST["bookInvetoryId"];
            $bookName = $_POST["bookName"];
            $bIsbn = $_POST["bookIsbn"];
            $bPrice = $_POST["bookPrice"];
            $bAthorId = $_POST["bookAuthor"];
            $bPublisherId = $_POST["bookPublisherId"];
            $bQty = $_POST["bookQuntity"];
            $bImage = $_POST["bookImg"];
          

          $sql = "UPDATE books SET BookCategoryId = $bookInventoryId ,BookTitle = '$bookName', ISBN =$bIsbn, Price = $bPrice, AuthorId = $PublisherId,  AvailableQty =$bQty, BookImage =$bImage IsActive = TRUE WHERE Id=$bid";

          
                    
         

            if(mysqli_query($conn,$sql)){

                echo"<script> alertt ('Record Insert Successfully!!!')</script>";
                header("Location:Books.php");
            }
            else{

                echo"<script> alertt ('Error in insert in record')</script>";
            }
            mysqli_close($conn);
?>