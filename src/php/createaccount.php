<?php
       //conect to config.php .
        include 'config.php';
             
         // declare variables.
	      $firstName=$_POST["h_fname"];
             $lastName=$_POST["h_lname"];
             $dob=$_POST["h_dob"];
             $gender=$_POST["h_gender"];
             $email=$_POST["h_emailAdd"];
             $contactNumber=$_POST["h_num"];
             $address=$_POST["h_addr"];
             $password=$_POST["h_rpwd"];

			
			
		 // Check insert successfully or not.
               if($conn->query($sql)){
                     echo"<script> alert('Account created successfully')</script>";      
                     header("Location:../createaccount.html");
                 
                 }
              else{
                     
                     echo"<script> alert('Error')</script>";
                     header("Location:../createaccount.html");
                 
                 }
              
          //close the data base
			  $conn->close(); 

?>