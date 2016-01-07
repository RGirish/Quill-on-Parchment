<?php

include("conn.php");

$username  = $_POST['username'];
$password  = $_POST['password'];
$encryptedpassword=sha1($password);

$sql="SELECT id,firstname,lastname,gender,dob,profession,email,country,city from tbl_users WHERE username='$username' AND password='$encryptedpassword';";
$result = mysqli_query($con, $sql);
$row=$result->fetch_row();
if($row[0]==null)
{
echo 0;
}
else
{

session_start();
$_SESSION['id']=$row[0];
$_SESSION['firstname']=$row[1];
$_SESSION['lastname']=$row[2];
$_SESSION['gender']=$row[3];
$_SESSION['dob']=$row[4];
$_SESSION['profession']=$row[5];
$_SESSION['email']=$row[6];
$_SESSION['country']=$row[7];
$_SESSION['city']=$row[8];
$_SESSION['username']=$username;
$_SESSION['isloggedin'] = true;
echo $row[0];
}
?>