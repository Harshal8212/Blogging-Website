
<?php 
$servername='localhost'; 
$username = 'root'; 
$password = ''; 
$database = 'edu_db'; 
  

$conn = new mysqli($servername, $username, $password, $database); 
  

if (!$conn){ 
    echo "Connection Unsuccessful!!!"; 
} 
  
if($_SERVER["REQUEST_METHOD"] =="POST"){
    $user=$_POST['name'];
    $pass = $_POST['pass'];
    $country = $_POST['country'];

    $sql = "INSERT INTO users(uname, upass, ucountry) VALUES ('$user', '$pass', '$country')"  ;
    $res = $conn->query($sql);
 
    if($res){
        $sql1 = "SELECT * FROM users WHERE uname='$user' AND upass='$pass'"  ;
        $res1 = mysqli_query($conn, $sql1);

        if(mysqli_num_rows($res1)){

            while($info1 = mysqli_fetch_assoc($res1)){
                $url1 = "./indexAf.php?id=" . $info1['uid'];
                header("Location: $url1"); 
            }
        }
        else{
            $em = "Wrong Credentials!!";
            header("Location: login.php?error=$em");
        }
        
    }
    else{
        echo "Invalid username or passward";
    }
    echo $user;
}

$conn->close();


?>