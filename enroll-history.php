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
<table  width="1000px" >

<?php

include("include/config.php");
session_start();

$query="SELECT * FROM course where email = '".$_SESSION['email']."'";

$data=mysqli_query($conn,$query);

?>

    <tr>
    <th>Id</th>
    <th>email</th>
    <th>Course</th>
    <th>Batch</th>
    <th>Price</th>
   
</tr>

<?php
while($row=mysqli_fetch_array($data))
{
    echo"
    <tr>
    <td style=height: 10px;>$row[id]</td>
    <td>$row[email]</td>
    <td>$row[course]</td>
    <td>$row[batch]</td>
    <td>$row[price]</td>
   
</tr>";
}
?>
</table>
    <!-- start footer -->
<?php
    include("include/footer.php");
    ?>
    <!-- end footer -->
</div>
</body>
</html>