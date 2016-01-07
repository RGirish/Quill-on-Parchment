<?php
include '../conn.php';
if(mysqli_connect_errno($con))
{
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}

$sql="SELECT count(title) FROM tbl_status WHERE type='t' AND status='a';";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo $row[0];
mysqli_close($con);
?>