<?php
session_start();

    include 'config.php';
    //check post requvest
    if (!empty($_POST)){

        //assign values
        $Email = $_POST['userEmail'];
        $Password = $_POST['userPass'];
        $Id = 0;
        $IsActive = 0;
        $UserType = "";
        $username="";
    

        
        //user input select query and  prepare statment  use to execute the same (or similar) SQL statements repeatedly with high efficiency.
        $stmt = $conn->prepare("SELECT Id, Email, Password, IsActive, UserType FROM users WHERE Email=? AND Password=? LIMIT 1");

        //This function binds the parameters to the SQL query and tells the database what the parameters . 'ss'String type
        $stmt->bind_param('ss', $Email, $Password);
        $stmt->execute();
        $stmt->bind_result($Id , $username, $Password, $IsActive,$UserType);
        $stmt->store_result();

        //To check if the row exists
        if($stmt->num_rows == 1)  
            {
                //fetching the contents of the row
                if($stmt->fetch()) 
                {
                   if ( $IsActive == 0) {
                      // echo "YOUR account has been DEACTIVATED.";
                       echo"<script> alert('Your account Not Found.')</script>";
                      // header("Location:../loginpage.php");
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