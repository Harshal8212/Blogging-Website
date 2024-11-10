<?php $id=$_GET['id'] ?>
<!DOCTYPE html>
<html>
<head>
	<title>Image Upload Using PHP</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
	<style>
		/* Basic Styles for the Form */
    body{
      margin: 0;
    }
.formC {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  
  display: flex;
  justify-content: center;
  align-items: center;

  background-color: #f0f0f0;
}

.form-container {
       width:80%;
      margin-top:7%;
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
  margin-bottom: 15px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input[type="text"],
textarea,
input[type="file"] {
  width: 100%;
  padding: 8px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

textarea {
  resize: vertical;
}

button {
  padding: 8px 20px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 16px;
}

button:hover {
  background-color: #0056b3;
}

.heading{
       display:flex;
       justify-content: center;
}

	</style>
</head>
<body>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
              
       <div class="display-2 heading">ADD your own blog</div>
       <dib class="formC">
     <div class="form-container" >
    <form action="upload_to.php?id=<?=$id?>"
           method="post"
           enctype="multipart/form-data">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="description">Short Description:</label>
        <textarea id="description" name="description" rows="2" required></textarea>
      </div>
      <div class="form-group">
        <label for="blog">Write Full Blog:</label>
        <textarea id="blog" name="blog" rows="8" required></textarea>
      </div>
      <div class="form-group">
        <label for="image">Upload Image:</label>
        <input type="file" id="image" name="my_image" required>
      </div>
      <div class="form-group">
      <button><input type="submit" 
                  name="submit"
                  value="Upload"></button>
      </div>
    </form>
  </div>
       </div>
	 
</body>
</html>