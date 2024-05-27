<?php 
// Database connection 
$conn = mysqli_connect('localhost','root','','tour_db');
if($conn)
{  
  
  $U_Email = $_POST['Email']; 
  $U_Name = $_POST['username']; 
  $U_Pass = $_POST['Password']; 
  $U_rePass = $_POST['rePass'];
  $query = "INSERT INTO `signup`(`email`, `uname`, `password`, `re_pass`) VALUES('$U_Email','$U_Name','$U_Pass','$U_rePass')"; 
   // echo $query;
    if(mysqli_query($conn,$query))
  {
      echo "data inserted";
      header("Location: login_design.php");
      
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
