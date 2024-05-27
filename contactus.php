<?php 
// Database connection 
$conn = mysqli_connect('localhost','root','','tour_db');
if($conn)
{  
    $UName = $_POST['name']; 
    $Uemail = $_POST['email']; 
    $Umess = $_POST['message']; 
    $query = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES('$UName','$Uemail','$Umess')"; 
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
