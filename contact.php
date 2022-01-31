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
    <style>
        form{
            width:50%;
            border-radius: 10px;
            background-color: #f2f2f2;
            padding: 20px;
  
           
        }
        input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}


    </style>
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

<?php
error_reporting(0);
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "project1";
    // Create a connection
    $con = mysqli_connect($servername, $username, $password, $database);

  
        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $query = "INSERT INTO `contact` ( `name`, `email`, `msg`) VALUES ( '$name', '$email', '$msg')";

        mysqli_query($con,$query);
      
      
 
?>

<section class="order" id="order">

<h1 class="heading"> Contact <span>us</span> </h1>

<div class="row">

    <form method="POST" action="" data-aos="fade-right">
        <label>Name:</label>
        <input type="text" name="name" me=""  placeholder="your name" class="box"><br><br>
        <label>Email:</label>
        <input type="email" name="email" placeholder="your email" class="box"><br><br>
        <label>Message:</label>
        <textarea name="msg" class="box address" placeholder="Write something.." style="height:100px"></textarea><br><br>
        <input type="submit" value="submit" class="">
    </form>

</div>

</section>

    <!-- start footer -->
<?php
    include("include/footer.php");
    ?>
    <!-- end footer -->
</div>
</body>
</html