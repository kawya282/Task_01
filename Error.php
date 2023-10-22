<?php
session_start();
include("Connection.php");

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

mysqli_select_db($con , "User_db");

$un = $_POST['username'];
$pw = $_POST['password'];

$result = mysqli_query($con, "SELECT Username,Password FROM user_details WHERE Username='$un' AND Password='$pw'");

if(!$result){
    die("Query failed: " .mysqli_error($con));
    exit;
}

$row = mysqli_fetch_assoc($result);

if (mysqli_num_rows($result) === 1 && password_verify($pw,$row['Password'])){
    echo "<script>alert('Login Sucessfully!!!')</script>";    
    exit;
}

else{
    $_SESSION['error_message'] = "Invalid login,please try again";
    echo "<script>alert('Invalid Login')</script>";
    exit;
}

mysqli_close($con);    
?>