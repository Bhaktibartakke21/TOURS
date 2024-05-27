

<?php 
// Database connection 
$conn = mysqli_connect('localhost','root','','tour_db');
if($conn)
{  
    $admin_name = $_POST['admin_name']; 
    $admin_password = $_POST['admin_password']; 
    $query = "INSERT INTO `tb_admin`(`user_name`, `password`) VALUES ('$admin_name','$admin_password')"; 
   //echo $query;
    if(mysqli_query($conn,$query))
  {
       //echo "data inserted";
       echo '<script>alert("login sucessfull ")</script>'; 
    }
    else
     {
       echo "data not inserted";
   }  
}
else
{
    echo "not connected";
}

if(isset($_POST['redirect'])) {
    // Redirect to another page using PHP header function
    header("Location: dashboard.php");
}
    ?>