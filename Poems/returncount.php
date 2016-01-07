<?php
include("../conn.php");

$sql="SELECT count(title) FROM tbl_status WHERE type='p' AND status='a' AND language='e';";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo $row[0];
mysqli_close($con);
?>