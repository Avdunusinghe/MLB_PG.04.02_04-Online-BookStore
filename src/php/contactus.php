<?php
       //conect to config.php .
        include 'config.php';
             
         // declare variables.
            $name=$_POST["snName"];
            $contactNo=$_POST["snCnumber"];
            $emailAdd=$_POST["snEmail"];
            $msg=$_POST["snMsg"];
			
			
		
				//insert query
			         $sql="insert into contactus(MsgId,Name,ContactNo,Email,Msg) VALUES ('','$name','$contactNo','$emailAdd','$msg')";
                
                // Check insert successfully or not.
                       if($conn->query($sql)){
                           
                            header("Location:../contactus.html");
                        
                        }
						else{
                            
                            echo"<script> alert('Error')</script>";
                            header("Location:../contactus.php");
                        
                        }
              
          //close the data base
           $conn->close(); 
           
         

?>