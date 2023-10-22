<?php
include("Connection.php");

mysqli_select_db($con , "User_db");

$rawPassword=$_POST['pw_1'];
$hashedPassword=password_hash($rawPassword,PASSWORD_DEFAULT);

$sql="INSERT INTO user_details (Username,Password,Email) VALUES ('$_POST[username]','$hashedPassword','$_POST[email]')";

if (!mysqli_query($con, $sql))
{
die('Error: ' . mysqli_error($con));
}
echo "1 record added";

mysqli_close($con);
?>