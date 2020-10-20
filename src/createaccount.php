<?php

        include 'config.php';
			 
			 $firstName=$_POST["h_fname"];
             $lastName=$_POST["h_lname"];
             $dob=$_POST["h_dob"];
             $gender=$_POST["h_gender"];
             $email=$_POST["h_emailAdd"];
             $contactNumber=$_POST["h_num"];
             $address=$_POST["h_addr"];
             $password=$_POST["h_rpwd"];

			
				
				global  $conn;
		
					
			         $sql = "insert into users(Id,FirstName,LastName,Dob,Gender,Email,MobileNo,Address,Password,UserType,IsActive) VALUES('','$firstName','$lastName','$dob','$gender','$email','$contactNumber','$address','$password','Member',TRUE)";
						if($conn->query($sql)){
							  echo " Inserted successfully";
						}
						else{
							echo "Error:". $conn->error;
						}

			  $conn->close(); 


 ?>