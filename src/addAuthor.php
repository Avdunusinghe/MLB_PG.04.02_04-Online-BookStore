<?php

//include config file
include 'config.php';

 //eclare variables.
 $author = $_POST["bookAuthorName"];    
    
        //insert to data author table
       $sql = "insert into author (Id, Name) VALUES ('','$author')";

        //check connection
        if($conn->query($sql)){

            echo "insert successfully";
        }
        else {
            echo "Error:".$conn->error;
        }

        $conn->close();

?>