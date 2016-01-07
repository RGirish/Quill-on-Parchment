<?php

include "conn.php";

$category=$_GET['category'];
$title=$_GET['title'];
$usedornew=$_GET['usedornew'];
$price=$_GET['price'];
$negotiableorfixed=$_GET['negotiableorfixed'];
$description=$_GET['description'];
$image1=$_GET['image1'];
$image2=$_GET['image2'];
$name=$_GET['name'];
$city=$_GET['city'];
$state=$_GET['state'];
$phone=$_GET['phone'];
$email=$_GET['email'];
$latlong=$_GET['latlong'];
$eyemeeye=$_GET['eyemeeye'];

$query="INSERT INTO allads (category,title,usedornew,price,negotiableorfixed,description,image1,image2,name,city,state,phone,email,latlong,eyemeeye) VALUES ('".$category."','".$title."','".$usedornew."','".$price."','".$negotiableorfixed."','".$description."','".$image1."','".$image2."','".$name."','".$city."','".$state."','".$phone."','".$email."','".$latlong."','".$eyemeeye."');";
mysqli_query($conn,$query);
mysqli_close($conn);
echo "done";
exit();
?>