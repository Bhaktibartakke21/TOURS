<?php 
// Database connection 
$conn = mysqli_connect('localhost','root','','tour_db');
if($conn)
{  
    $UName = $_POST['firstname']; 
    $Uemail = $_POST['email']; 
    $Uphone=$_POST['phone'];
    $Utour=$_POST['tourname'];
    $Udepart = $_POST['Departure']; 
    $Ureturn=$_POST['return'];
    $Upick=$_POST['pickup_address'];
    $Udrop=$_POST['drop_address'];
    $query = "INSERT INTO `booking` (`name`, `email`, `phone_no`, `tourname`, `depdt`, `retdt`, `add_pick`, `add_drop`) 
    VALUES('$UName','$Uemail','$Uphone','$Utour','$Udepart','$Ureturn','$Upick','$Udrop')"; 
   // echo $query;
    if(mysqli_query($conn,$query))
  {
       //echo "data inserted";
       echo '<script>alert("Your booking is confirmed !!! ")</script>'; 
       
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