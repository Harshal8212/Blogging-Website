<?php include "db_co.php";
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./adminstyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <style>
        .heading-card {
  background-color: #f2f2f2;
  padding: 15px;
  margin-bottom: 20px;
  border-radius: 8px;
  text-align: center;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}
                .blog-table {
        width: 100%;
        border-collapse: collapse;
        }

        .blog-table th, .blog-table td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
        }

        .blog-table th {
        background-color: #f2f2f2;
        }

        .blog-table tbody tr:nth-child(even) {
        background-color: #f9f9f9;
        }

        .blog-table tbody tr:hover {
        background-color: #f1f1f1;
        }

        .delete-btn {
        background-color: #ff0000;
        color: #fff;
        border: none;
        padding: 6px 10px;
        border-radius: 4px;
        cursor: pointer;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Post It!!  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse navbar-links" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="dashboard.php?id=<?=$id?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="spblog.php?id=<?=$id?>">Sports</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="enblog.php?id=<?=$id?>">Entertainment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="toblog.php?id=<?=$id?>">Tourism</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link active" href="edblog.php?id=<?=$id?>">Education</a>
        </li>
        <?php 
              $id = $_GET['id'];
                $sql = "SELECT * FROM admin WHERE aid = $id";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($info = mysqli_fetch_assoc($res)) {  
            ?>
          <li class="nav-item ">
            <a class="nav-link active" href="#"><?= $info['aname'] ?></a>
          </li>
          <?php } }?>
      </ul>
      
    </div>
  </div>
</nav>


      <div class="heading-card">
        <h1>Sports Blogs</h1>
        <?php 
                $sql = "SELECT COUNT(*) FROM spblog";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($info = $res->fetch_row()) {  
            ?>
        <h2>Total Entries: <?=$info[0]?></h2>
        <?php } }?>
      </div>


      <table class="blog-table">
        <thead>
          <tr>
            <th>Blog Title</th>
            <th>Description</th>
            <th>Image URL</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
         
          <?php 
                $sql = "SELECT * FROM spblog";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($info = mysqli_fetch_assoc($res)) {  
            ?>
          <tr>

            <td> <?= $info['title']?></td>
            <td> <?= $info['description']?></td>
            <td> <?= $info['image_url']?></td>
            <td>
            <button class="delete-btn" onclick="document.location='delete.php?id=<?=$info['id']?>&cat=spblog'">Delete</button></td>
            </td>
          </tr>
          <?php } }?>
        </tbody>
      </table>
     

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>