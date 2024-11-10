
<?php 
$servername='localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'edu_db'; 
  

$conn = new mysqli($servername, $username, $password, $database); 
  

if (!$conn){ 
    echo "Connection Unsuccessful!!!"; 
} 

   $id = $_GET['id'];
   $cat = $_GET['cat'];
   $sql1 = "DELETE FROM $cat WHERE id=$id" ;
   $res1 = mysqli_query($conn, $sql1);
    if($res1){
        $url = "./" . $cat . ".php?id=" . $id;
        header("Location: $url"); 
        }
        
    else{
        $em = "Some thing is Wrong";
        header("Location: ./education.php?error=$em");
    }

$conn->close();


?>