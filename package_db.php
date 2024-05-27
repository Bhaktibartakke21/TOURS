<?php 
// Database connection 
$conn = mysqli_connect('localhost','root','','tour_db');
if($conn)
{  
    $packagename = $_POST['packagename']; 
    $packagetype = $_POST['packagetype']; 
    $packageloc = $_POST['packagelocation']; 
    $packageprice = $_POST['packageprice'];
    $packagefeature = $_POST['packagefeatures']; 
    $packagedetail = $_POST['packagedetails']; 
    $packageimg = $_POST['packageimage']; 
    $query = "INSERT INTO `packages` (`packagename`, `packagetype`, `packagelocation`, `packageprice`, `packagefeatures`, `packagedetails`, `packageimage`)
     VALUES('$packagename','$packagetype','$packageloc','$packageprice','$packagefeature','$packagedetail','$packageimg')"; 
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
