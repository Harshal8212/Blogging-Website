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
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.21/dist/vanta.globe.min.js"></script>
    <style>
      
    .cent{
        display:flex;
        justify-content:center;
        margin:20px;
    }

    </style>
    
</head>
<body>
    
    <div  id="anim_globe">    
      <div class="header">
        <a href="#default" class="logo ">POST IT!!</a>
        <div class="header-right">
          <a  href="indexAf.php?id=<?=$id?>">Home</a>
          <a href="#contact">Contact</a>
          <a class="active" href="#about">About</a>
          <?php 
              $id = $_GET['id'];
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
  
                      
  <section class="blog-page">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="blog-item">
                        
                        <div class="down-content">
                            
                        <section class="">
                        <div class="cent">
          <h2 id="about heading">ABOUT US</h2>
          
          </div>
          <p>
            Welcome to our digital hub, where a multitude of diverse voices and passions converge! At POST IT!!, we take pride in curating and managing an expansive array of blogs spanning across a spectrum of categories. From the latest trends in technology to the timeless beauty of arts and culture, from the adrenaline rush of sports to the quietude of mindfulness, our platform is a vibrant tapestry woven with insights, expertise, and enthusiasm		</p>
  
          <p>
			We foster a community where writers, experts, and enthusiasts share their knowledge and experiences, offering a rich and dynamic tapestry of content to satiate every curiosity.</p>
  
          <p>
            Whether you're here for entertainment, education, or exploration, we're dedicated to providing an immersive and enriching experience for all who visit. Join us on this journey of discovery as we explore the diverse and fascinating world of blogs, united under one digital roof.
        </p>
        </section>
                      
      <hr>
        <section class="left">
          <div class="cent">
          <h2 id="events" class="head">Features</h2>
                    </div>
          <p>
            <p>
                At POST IT!!, we pride ourselves on offering a myriad of features that elevate your browsing and engagement experience. Our user-friendly interface ensures seamless navigation, making it effortless to explore and discover captivating content across multiple categories.
          <p>
			With a robust search function and personalized recommendations, finding the perfect blog tailored to your interests becomes a breeze. Engage with our community through interactive comment sections, fostering discussions, and connections with like-minded individuals.
            </p>
          <p>
            Accessible across devices, our platform adapts to your preferences, allowing you to enjoy our diverse range of blogs anytime, anywhere. Additionally, our commitment to quality ensures that each blog is meticulously curated, offering insightful, well-researched, and compelling content to satisfy your thirst for knowledge and entertainment. Join us in unlocking a world of information, inspiration, and enjoyment at [Your Website Name].</p>
        

        </section>

                        </div>
                    </div>
                </div>
            </div>

    </section>
  
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