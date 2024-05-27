<?php
$sname ="localhost";/* tumchay serve cha nav*/
$unmae="root";/* tumchay database cha user name*/
$pass="";/* tumchay database cha pass*/
$db_name="tour_db";/* tumchay database cha name*/

$conn = mysqli_connect($sname,$unmae,$pass,$db_name);
if(!$conn){
    echo"connection failed ";
}

?>