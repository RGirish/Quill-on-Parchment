<?php
include("../conn.php");

$sql="SELECT count(pno) FROM tbl_store;";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo $row[0];
mysqli_close($con);
?>