<?php

include("conn.php");

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$country=$_POST['country'];
$city=$_POST['city'];
$email=$_POST['email'];
$gender=$_POST['gender'];

$date=$_POST['date'];
$month=$_POST['month'];
$year=$_POST['year'];
$dob=$date . $month . $year;

$about=$_POST['about'];
$profession=$_POST['profession'];
$password=$_POST['password'];
$encryptedpassword=sha1($password);
$q1=$_POST['question1'];
$q2=$_POST['question2'];
$a1=$_POST['answer1'];
$a2=$_POST['answer2'];

$username = mysqli_real_escape_string($con, $username);
$firstname = mysqli_real_escape_string($con, $firstname);
$lastname = mysqli_real_escape_string($con, $lastname);
$about = mysqli_real_escape_string($con, $about);
$country = mysqli_real_escape_string($con, $country);
$city = mysqli_real_escape_string($con, $city);
$email = mysqli_real_escape_string($con, $email);
$a1 = mysqli_real_escape_string($con, $a1);
$a2 = mysqli_real_escape_string($con, $a2);


$cmd="SELECT username FROM tbl_users WHERE username='$username';";
$result=mysqli_query($con,$cmd);
$row = mysqli_fetch_array($result);
if($row[0]==null)
{

$sql="INSERT INTO tbl_users (firstname,lastname,gender,dob,username,password,email,profession,about,country,city,q1,a1,q2,a2) VALUES ('$firstname' , '$lastname' , '$gender' , '$dob' , '$username' , '$encryptedpassword' , '$email' , '$profession' , '$about' , '$country' , '$city' , '$q1' , '$a1' , '$q2' , '$a2')";
if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
mysqli_close($con);
header('Location: register.html?second=2');
}
else
{
mysqli_close($con);
header('Location: register.html?second=4');

}




exit();
?>