<?php
            //include config file 
            include 'config.php';

            //declare a variable
            $bid = $_POST["id"];
            $bookCategoryId = $_POST["bookInvetoryId"];
            $bookName = $_POST["bookName"];
            $bIsbn = $_POST["bookIsbn"];
            $bPrice = $_POST["bookPrice"];
            $bAthorId = $_POST["bookAuthor"];
            $bPublisherId = $_POST["bookPublisherId"];
            $bQty = $_POST["bookQuntity"];
            $bImage = $_POST["bookImg"];
          
            //book table data update query
            $sql = "UPDATE books SET 
            Id=$bid,
            BookCategoryId = $bookCategoryId ,
            BookTitle = '$bookName',  
            ISBN =$bIsbn, 
            Price = $bPrice, 
            AuthorId = $bAthorId,  
            PublisherId = $bPublisherId,  
            AvailableQty =$bQty,  
            BookImage ='$bImage', 
            IsActive = TRUE
            WHERE Id=$bid";

          //check db opration 
              
            if(mysqli_query($conn,$sql)){

               // echo"<script> alertt ('Record Insert Successfully!!!')</script>";
                header("Location:Books.php");
            }
            else{

                echo"<script> alertt ('Error in insert in record')</script>";
            }
            mysqli_close($conn);
?>