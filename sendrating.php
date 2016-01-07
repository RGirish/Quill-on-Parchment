<?php
session_start();
include("conn.php");

$aid=$_GET['aid'];

$id=$_SESSION['id'];
$rate=$_GET['rate'];
$sql="INSERT INTO tbl_ratings (id,aid,rating) VALUES($id,$aid,$rate);";
mysqli_query($con, $sql);

mysqli_close($con);
?>