<?php
include("../conn.php");

$pno=$_POST['pno'];
$name=$_POST['name'];
$address1=$_POST['address1'];
if(isset($_POST['address2'])) $address2=$_POST['address2'];
else $address2="";
$area=$_POST['area'];
$city=$_POST['city'];
$state=$_POST['state'];
$pincode=$_POST['pincode'];
if(isset($_POST['landmark'])) $landmark=$_POST['landmark'];
else $landmark="";
$email=$_POST['email'];
$phone=$_POST['phone'];
if(isset($_POST['size'])) $size=$_POST['size'];
else $size="";
if(isset($_POST['color'])) $color=$_POST['color'];
else $color="";
$quantity=$_POST['quantity'];

$name = mysqli_real_escape_string($con, $name);
$address1 = mysqli_real_escape_string($con, $address1);
$address2 = mysqli_real_escape_string($con, $address2);
$area = mysqli_real_escape_string($con, $area);
$city = mysqli_real_escape_string($con, $city);
$state = mysqli_real_escape_string($con, $state);
$landmark = mysqli_real_escape_string($con, $landmark);
$email = mysqli_real_escape_string($con, $email);

$sql="INSERT INTO tbl_order (pno,name,address1,address2,area,city,state,pincode,landmark,email,phone,size,color,quantity) VALUES ($pno,'$name','$address1','$address2','$area','$city','$state','$pincode','$landmark','$email','$phone','$size','$color',$quantity);";

mysqli_query($con,$sql);
mysqli_close($con);

header('Location: ../Store/index.html?case=1');

exit();


?>