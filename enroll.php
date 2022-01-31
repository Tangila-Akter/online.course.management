<?php
session_start();
 $_SESSION["id"] = "1";
 
$conn = mysqli_connect("localhost", "root", "", "project1") or die("Connection Error: " . mysqli_error($conn));

if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $course=$_POST['course'];
    $batch=$_POST['batch'];
    $price=$_POST['price'];

   
    $sql="INSERT INTO course ( email, course, batch, price) VALUES ( '$email', '$course', '$batch', '$price')";
    if(mysqli_query($conn,$sql))
    {
            echo"Course enrolled successfully";
    }
    else {
        echo"Course is not enrolled ";
    }
    }

?> 

<html>
<head>
<title>Enroll Course</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container p-4">
    <!-- start navbar -->
    <?php
    include("include/navbar.php");
    ?>
    <!-- end navbar -->
<?php
error_reporting(0);
include("config.php");
$id=$_GET['id'];
$query="SELECT * FROM `course` where id=$id";
$data=mysqli_query($conn,$query);
$row=mysqli_fetch_array($data);
?>
    <h3 style=text-align:center>Course Enroll</h3>
    <form action="" method="post">
        User email:<input type="email" name="email" value="<?php echo $row['email'];?>"><br>
        Course:<select name="course" onBlur="courseAvailability()">
            <option>HTML5</option>
            <option>CSS3</option>
            <option>PHP</option>
            <option>WordPress</option>
        </select><br>
        Course batch:<select name="batch">
            <option>Day</option>
            <option>Evening</option>
        </select><br>
        Price:<input type="number"  name="price" value="3500" readonly>৳<br><br>
  <input type="submit" value="Submit" name='submit'>
  
    </form>
    
  

<!-- start footer -->
<?php
    include("include/footer.php");
    ?>
    <!-- end footer -->

    <script>
function courseAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'cid='+$("#course").val(),
type: "POST",
success:function(data){
$("#course-availability-status1").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
</body>
</html>