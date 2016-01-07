<?php

session_start();

include("conn.php");

$username=$_SESSION['xusername'];
$password=$_POST['password1'];
$encryptedpassword=sha1($password);

$username=mysqli_real_escape_string($con, $username);
$sql="UPDATE tbl_users SET password='$encryptedpassword' WHERE username='$username';";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}

unset($_SESSION['xusername']);

mysqli_close($con);

header('Location: login.html?case=2');

exit();
?>