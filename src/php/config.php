<?php 
 $servername = "localhost";
 $username = "root";
 $password = "";
 $DBsever="onlinebookstore";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $DBsever);

 // Check connection
 
 if ($conn->connect_error) { 
    die("Connection failed: " . $conn->connect_error); 
} 
//echo "Connected successfully"; 
echo"<script> alertt ('Record Insert Successfully!!!')</script>";
?>
