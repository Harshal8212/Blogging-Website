
<?php 
$servername='localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'edu_db'; 
  

$conn = new mysqli($servername, $username, $password, $database); 
  

if (!$conn){ 
    echo "Connection Unsuccessful!!!"; 
} 