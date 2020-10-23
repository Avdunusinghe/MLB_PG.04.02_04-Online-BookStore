<?php
session_start();
    include 'config.php';
    if (!empty($_POST)){

        $Email = $_POST['userEmail'];
        $Password = $_POST['userPass'];
        $Id = 0;
        $IsActive = 0;
    

        
    
        $stmt = $conn->prepare("SELECT Id, Email, Password, IsActive FROM users WHERE Email=? AND Password=? LIMIT 1");
        $stmt->bind_param('ss', $Email, $Password);
        $stmt->execute();
        $stmt->bind_result($Id , $username, $Password, $IsActive);
        $stmt->store_result();
        if($stmt->num_rows == 1)  //To check if the row exists
            {
                if($stmt->fetch()) //fetching the contents of the row
                {
                   if ( $IsActive == 0) {
                       echo "YOUR account has been DEACTIVATED.";
                       exit();
                   } else {
                       $_SESSION['Logged'] = 1;
                       $_SESSION['id'] = $Id;
                       $_SESSION['username'] = $Email;
                       header("Location:../Home.php");
                       exit();
                   }
               }
    
        }
        else {
            echo "INVALID USERNAME/PASSWORD Combination!";
        }
        $stmt->close();
    }
    else 
    {   
        echo "test"; 
    }
    $conn->close(); 
    ?>