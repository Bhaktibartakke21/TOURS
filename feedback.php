<?php 
// Database connection 
$conn = mysqli_connect('localhost','root','','tour_db');
if($conn)
{  
    $UName = $_POST['name1']; 
    $Uemail = $_POST['email']; 
    $Ufeed = $_POST['feed']; 
    $query = "INSERT INTO `feedback` (`name`, `email`, `u_feed`) VALUES('$UName','$Uemail','$Ufeed')"; 
   // echo $query;
    if(mysqli_query($conn,$query))
  {
       echo "data inserted";
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
    ?>
