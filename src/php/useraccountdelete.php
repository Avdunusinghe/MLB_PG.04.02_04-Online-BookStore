<?php
    //conect to config.php 
    include 'config.php';
    // get id through url(frome useraccount.php, Delete button)
        $user_id = $_GET['id']; 

        $sql = "DELETE FROM users WHERE Id = $user_id"; // delete query


            
                if ($conn->query($sql) === TRUE) {

                  
                    //back to the relevant location.
                    header("Location:../Home.html");
                
                } 
                
                else {
                    echo "Error updating record: " . $conn->error;
                }
                
                //close the data base
                mysqli_close($conn);
?>