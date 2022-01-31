<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css"> 
   
    <title>user home</title>
</head>
<body>
<div class="container p-4">
    <!-- start navbar -->
    <?php
    include("include/navbar.php");
    ?>
    <!-- end navbar -->
    
<!-- code -->
<section class="popular" id="popular">

 <h1 class="heading"> All <span>Our</span> Courses </h1> 

<div class="box-container">
<span class="b">
    <div class="box" data-aos="fade-right">
        <img src="css/img/product1.png" alt="" width="460" height="345">
        <h3>HTML5</h3>
        
        <div class="price">৳30.00</div>
        <a href="enroll.php"><button class="btn">Enroll now</button></a>
    </div>

    <div class="box" data-aos="fade-left">
        <img src="css/img/product2.png" alt="">
        <h3>CSS3</h3>
        
        <div class="price">৳30.00</div>
        <a href="enroll.php"><button class="btn">Enroll now</button></a>
    </div>
</span>
<span class="b">
    <div class="box" data-aos="fade-right">
        <img src="css/img/product3.png" alt="">
        <h3>PHP</h3>
       
        <div class="price">৳30.00</div>
        <a href="enroll.php"><button class="btn">Enroll now</button></a>
    </div>

    <div class="box" data-aos="fade-left">
        <img src="css/img/product4.png" alt="">
        <h3>Wordpress</h3>
        
        <div class="price">৳30.00</div>
        <a href="enroll.php"><button class="btn">Enroll now</button></a>
    </div>
</span>
</div>

</section>


<!-- course ends -->



    <!-- start footer -->
<?php
    include("include/footer.php");
    ?>
    <!-- end footer -->
</div>
</body>
</html