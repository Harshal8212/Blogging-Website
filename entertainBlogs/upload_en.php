<?php 

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_co.php";
	$id = $_GET['id'];
	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	$em="";
	
	if ($error === 0) {
		
			$em = "No Error";
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
				$img_upload_path = 'uploads/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);
                $title=$_POST['title'];
                $desc = $_POST['description'];
				$blog= $_POST['blog'];
				

				// Insert into Database
				$sql = "INSERT INTO enblog(title, description, image_url, blog) 
				        VALUES('$title', '$desc','$new_img_name', '$blog')";
				mysqli_query($conn, $sql);
				
				
			}else {
				$em = "You can't upload files of this type";       
			}
		
	}else {
		$em = "unknown error occurred!";
		
	}
	$url = "./entertainment.php" . "?id=$id" . "&error=$em";
	header("Location: $url");
}else {
	$url = "./entertainment.php" . "?id=$id";
	header("Location: $url");
}