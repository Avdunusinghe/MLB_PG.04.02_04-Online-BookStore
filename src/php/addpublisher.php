<?php

//include config file
include 'config.php';

 //eclare variables.
 $publisher = $_POST["bookPubName"];    

       $sql = "insert into publisher (Id, Name) VALUES ('','$publisher')";

        if($conn->query($sql)){

            echo "insert successfully";
        }
        else {
            echo "Error:".$conn->error;
        }

        $conn->close();

?>