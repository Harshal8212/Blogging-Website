<?php include "db_co.php"; 
    $uid = $_GET['uid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style/style1.css">
    <link rel="stylesheet" href="../style/blogpage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">POST IT!!</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../userSide/indexAf.php?id=<?=$uid?>">Home</a></li>
      <li><a href="../userSide/contact.php?id=<?=$uid?>">About us</a></li>
      <li><a href="../userSide/about.php?id=<?=$uid?>">Contact us</a></li>
      
    </ul>
  </div>
</nav>

    <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog-item">
                        
                        <div class="down-content">
                            
                            <?php 
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM edblog where id = '$id'";
                                $res = mysqli_query($conn,  $sql);

                                if (mysqli_num_rows($res) > 0) {
                                    while ($images = mysqli_fetch_assoc($res)) {  ?>
                                    
                                    <div class="cent">
                                        <h1> <?= $images['title']?></h1>
                                    </div>
                                        <h3> <?= $images['description'] ?> </h3>
                                        <p><?= $images['blog'] ?> </p>
                                        <img src="./uploads/<?=$images['image_url']?>">
                                        
                                    </div>
                                        
                            <?php } }?>
                            <button class="btn btn-primary" onclick="document.location='education.php?id=<?=$uid?>'" >Back</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

     


      <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Company Name © 2018</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>