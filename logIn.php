<?php 
session_start();
include "db_connection.php";

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['uname']) && isset($_POST['password'])){
    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);

    if(empty($uname) || empty($password)){
        echo "<script>alert('Username or password cannot be empty');</script>";
        exit();
    } 

    $sql = "SELECT * FROM vw_signup WHERE uname='$uname' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['uname'] === $uname && $row['password'] === $password){
            echo "<script>alert('Logged in');</script>";
            $_SESSION['uname'] = $row['uname'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            echo "<script>window.location='home.php';</script>";
            exit();
        } else {
            echo "<script>alert('Wrong user name or password');</script>";
            exit();
        }
    } else {
        echo "<script>alert('Wrong user name or password');</script>";
        echo "<script>window.location='login_design.php';</script>";
        exit(); 
    }
}
?>