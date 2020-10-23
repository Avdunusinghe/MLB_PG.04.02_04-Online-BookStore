<?php
    //include 'config.php';
      if(isset($_POST["submit"])){  
  
        if(!empty($_POST['userEmail']) && !empty($_POST['userPass'])) {  
            $user=$_POST['userEmail'];  
            $pass=$_POST['userPass'];  
            include 'config.php';
            //$conn=mysql_connect("localhost","root","") or die(mysql_error());  
            //mysql_select_db("onlinebookstore") or die("cannot find online BookSotre");  
          
            $sql = mysql_query("SELECT * FROM users WHERE Email='".$user."' AND Password='".$pass."'");  
            $numrows=mysql_num_rows($sql);  
            if($numrows!=0)  
            {  
            while($row=mysql_fetch_assoc($sql))  
            {  
            $dbusername=$row['Email'];  
            $dbpassword=$row['Password'];  
            }  
          
            if($user == $dbusername && $pass == $dbpassword)  
            {  
            session_start();  
            $_SESSION['sess_user']=$user;  
          
            /* Redirect browser */  
           // header("Location:../Home.html");  
            }  
            } else {  
            echo "Invalid username or password!";  
            }  
          
        } else {  
            echo "All fields are required!";  
        }  
        }  
    ?>