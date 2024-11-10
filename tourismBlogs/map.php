<?php include "db_co.php";
$id = $_GET['id'];
$uid = $_GET['uid'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>historical guide</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel=" icon" href="img/favicon-32x32.png" type="image/x-icon">
    </head>
<body>
    
    <div class="container p-5 my-5 bg-light ">
   
    <?php 
                                
            $sql = "SELECT * FROM toblog where id = '$id'";
            $res = mysqli_query($conn,  $sql);

            if (mysqli_num_rows($res) > 0) {
                while ($info = mysqli_fetch_assoc($res)) { 
                                    
            $title = $info['title'] ; 
            $arr =  explode(' ', $title)   ;              
            $replaced = implode('+', $arr);
            ?>
            
            
            <div class="d-flex justify-content-center text-white">
                <h1 class="text-black mb-4">Map of <?=$title?></h1>
            </div>
            <div class="d-grid">
                 <a href="blogpost.php?id=<?= $info['id'] ?>&uid=<?= $uid ?>" class="btn btn-primary m-4 ">Back to Article</a>
            </div>
            <iframe
              width="100%"
              height="1000px"
              frameborder="0" style="border:5px"
              referrerpolicy="no-referrer-when-downgrade"
              src="https://www.google.com/maps/embed/v1/place?key=<-GOOGLE API KEY->&q=<?=$replaced?>"
              allowfullscreen>
            </iframe>
            
            <?php } }?>
    </div>
</body>
</html>
