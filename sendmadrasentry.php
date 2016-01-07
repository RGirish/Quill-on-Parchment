<?php

include("conn.php");

$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$article=$_POST['article'];

$name = mysqli_real_escape_string($con, $name);
$email = mysqli_real_escape_string($con, $email);
$article = mysqli_real_escape_string($con, $article);

$sql="INSERT INTO tbl_madras_reg (name,phone,email,passage) VALUES('$name','$phone','$email','$article');";
mysqli_query($con,$sql);

mysqli_close($con);
header('Location: madras.html?no=2');

exit();
?>