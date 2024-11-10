<?php include "db_co.php";
   $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/vendor/three.r119.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.globe.min.js"></script>
    
</head>
<body>
    
    <div  id="anim_globe">    
      <div class="header">
        <a href="#default" class="logo ">POST IT!!</a>
        <div class="header-right">
          <a class="active" href="#categories">Home</a>
          <a href="https://docs.google.com/forms/d/e/1FAIpQLSfh_hAan7fSNLiUPB9Xmjan0conYoeBS9E-U47qj2D-f8HNtA/viewform?embedded=true">Contact</a>
          <a href="about.php?id=<?=$id?>">About</a>
          <?php 
            
                $sql = "SELECT * FROM users WHERE uid = $id";
                $res = mysqli_query($conn,  $sql);

                if (mysqli_num_rows($res) > 0) {
                    while ($info = mysqli_fetch_assoc($res)) {  
            ?>
          <a href="#profile"><?= $info['uname'] ?></a>
          <?php } }?>

        </div>
      </div>
      
      <section class="banner">
        <div class="container1">
            <div class="row">
                <div class="d-flex flex-column">
                    <div class="p-2 display-5">Express yourself freely....</div>
                    <div class="p-2 display-1">POST the BLOGS</div>
                    <div class="p-2"><button class="btn btn-primary">START</button></div>
                  </div>
                  
            </div>
        </div>
    </section>
  </div>
  


      <div class="heading display-2">
        Latest Featured Blogs
      </div>
      <div class="container text-center">
        <div class="row row-cols-2">
          <div class="col ">
            <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                  <div class="card card1">
                  <?php 
                    $sql = "SELECT * FROM edblog  ORDER BY id DESC LIMIT 0, 1";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($info = mysqli_fetch_assoc($res)) {  
                  ?>
                      <img class="card-img" src="../educationalBlogs/uploads/<?=$info['image_url']?>" alt="Bologna">
                      <div class="card-body">
                        <h4 class="card-title"><?= $info['title']?></h4>
                        
                        <p class="card-text"><?= $info['description']?></p>
                        <a href="../educationalBlogs/blogpost.php?id=<?= $info['id'] ?>&uid=<?= $id ?>" class="btn btn-info">Read More</a>
                      </div>
                    </div>
                    <?php } }?>
                  </div>
                </div>
              </div>
          </div>
          
          <div class="col ">
            <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                  <div class="card card1">
                  <?php 
                    $sql = "SELECT * FROM enblog  ORDER BY id DESC LIMIT 0, 1";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($info = mysqli_fetch_assoc($res)) {  
                  ?>
                      <img class="card-img" src="../entertainBlogs/uploads/<?=$info['image_url']?>" alt="Bologna">
                      <div class="card-body">
                        <h4 class="card-title"><?= $info['title']?></h4>
                        
                        <p class="card-text"><?= $info['description']?></p>
                        <a href="../entertain/blogpost.php?id=<?= $info['id'] ?>&uid=<?= $id ?>" class="btn btn-info">Read More</a>
                      </div>
                    </div>
                    <?php } }?>
                  </div>
                </div>
              </div>
          </div>


          <div class="col ">
            <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                  <div class="card card1">
                  <?php 
                    $sql = "SELECT * FROM spblog  ORDER BY id DESC LIMIT 0, 1";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($info = mysqli_fetch_assoc($res)) {  
                  ?>
                      <img class="card-img" src="../sportsBlogs/uploads/<?=$info['image_url']?>" alt="Bologna">
                      <div class="card-body">
                        <h4 class="card-title"><?= $info['title']?></h4>
                        
                        <p class="card-text"><?= $info['description']?></p>
                        <a href="../sportsBlogs/blogpost.php?id=<?= $info['id'] ?>&uid=<?= $id ?>" class="btn btn-info">Read More</a>
                      </div>
                    </div>
                    <?php } }?>
                  </div>
                </div>
              </div>
          </div>


          <div class="col ">
            <div class="container">
                <div class="row">
                  <div class="col-12 col-sm-8 col-md-6 col-lg-4">
                  <div class="card card1">
                  <?php 
                    $sql = "SELECT * FROM toblog ORDER BY id DESC LIMIT 0, 1";
                    $res = mysqli_query($conn,  $sql);

                    if (mysqli_num_rows($res) > 0) {
                        while ($info = mysqli_fetch_assoc($res)) {  
                  ?>
                      <img class="card-img" src="../tourismBlogs/uploads/<?=$info['image_url']?>" alt="Bologna">
                      <div class="card-body">
                        <h4 class="card-title"><?= $info['title']?></h4>
                        
                        <p class="card-text"><?= $info['description']?></p>
                        <a href="../tourismBlogs/blogpost.php?id=<?= $info['id'] ?>&uid=<?= $id ?>" class="btn btn-info">Read More</a>
                      </div>
                    </div>
                    <?php } }?>
                </div>
              </div>
          </div>
                                </div>
            </div>
    <!-- ending of weekly -->

        <div class="options" id="categories">
            <div class="heading">
                <h1 class="display-3 " >CATEGORIES</h1>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circular">
                        <a href="../educationalBlogs/education.php?id=<?=$id ?>">
                        <img src="img/cicleED.png" class="rounded-circle circleI" alt="Education">
                        <h4>Education</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circular">
                        <a href="../sportsBlogs/sports.php?id=<?=$id ?>">
                        <img src="img/circleSP.png" class="rounded-circle circleI" alt="Education">
                        <h4>Sports</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circular">
                        <a href="../entertainBlogs/entertainment.php?id=<?=$id ?>">
                        <img src="img/cicleEN.png" class="rounded-circle circleI" alt="Education">
                        <h4>Entertainment</h4>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="circular">
                        <a href="../tourismBlogs/tourism.php?id=<?=$id ?>">
                        <img src="img/circleTo.png" class="rounded-circle circleI" alt="Education">
                        <h4>Tourism</h4>
                        </a>
                    </div>
                </div>
        </div>    
      </div>


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
    <script src="../js/index.js"></script>
  <script>

  </script>
</body>
</html>