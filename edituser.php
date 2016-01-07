<?php

session_start();

include("conn.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$country=$_POST['country'];
$city=$_POST['city'];
$gender=$_POST['gender'];

$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob=$date . $month . $year;

$profession=$_POST['profession'];
$id=$_SESSION['id'];
$name=$firstname . " " . $lastname;


$name=mysqli_real_escape_string($con,$name);
$firstname=mysqli_real_escape_string($con,$firstname);
$lastname=mysqli_real_escape_string($con,$lastname);
$country=mysqli_real_escape_string($con,$country);
$city=mysqli_real_escape_string($con,$city);
$email=mysqli_real_escape_string($con,$email);



$password=$_POST['pass1'];

if($password=="")
{
$sql="UPDATE tbl_users SET country='$country', city='$city', firstname='$firstname',lastname='$lastname',email='$email',gender='$gender',profession='$profession',dob='$dob' WHERE id=$id;";
}
else
{
$encryptedpassword=sha1($password);
$sql="UPDATE tbl_users SET country='$country', city='$city', firstname='$firstname',lastname='$lastname',email='$email',gender='$gender',profession='$profession',dob='$dob', password='$encryptedpassword' WHERE id=$id;";
}

$sql2="UPDATE tbl_status SET author='$name' WHERE id='$id';";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}

if (!mysqli_query($con,$sql2))
{
  die('Error: ' . mysqli_error($con));
}

$_SESSION['firstname']=$firstname;
$_SESSION['lastname']=$lastname;
$_SESSION['gender']=$gender;
$_SESSION['dob']=$dob;
$_SESSION['profession']=$profession;
$_SESSION['email']=$email;
$_SESSION['country']=$country;
$_SESSION['city']=$city;

mysqli_close($con);

header('Location: viewprofile.html');

exit();
?>