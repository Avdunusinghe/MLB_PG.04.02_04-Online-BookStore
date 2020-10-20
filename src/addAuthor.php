<?php

//include config file
include 'config.php';

 //eclare variables.
 $author = $_POST["bookAuthorName"];    

       $sql = "insert into author (Id, Name) VALUES ('','$author')";

        if($conn->query($sql)){

            echo "insert successfully";
        }
        else {
            echo "Error:".$conn->error;
        }

        $conn->close();

?>