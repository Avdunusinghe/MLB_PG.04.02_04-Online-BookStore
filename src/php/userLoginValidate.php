<?php
session_start();
    include 'config.php';
    if (!empty($_POST)){

        //asign values
        $Email = $_POST['userEmail'];
        $Password = $_POST['userPass'];
        $Id = 0;
        $IsActive = 0;
        $UserType = "";
    

        
        //user input select query and  prepare statment  use to execute the same (or similar) SQL statements repeatedly with high efficiency.
        $stmt = $conn->prepare("SELECT Id, Email, Password, IsActive, UserType FROM users WHERE Email=? AND Password=? LIMIT 1");

        // this func
        $stmt->bind_param('ss', $Email, $Password);
        $stmt->execute();
        $stmt->bind_result($Id , $username, $Password, $IsActive,$UserType);
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
                       $_SESSION['usertype'] = $UserType;
                       header("Location:../Home.php");
                       exit();
                   }
               }
    
        }
        else {
        
            //user password not correct go again login page
            header("Location:../loginpage.php");
        }
        $stmt->close();
    }
    else 
    {   
        echo "test"; 
    }


     $conn->close(); 
    ?>