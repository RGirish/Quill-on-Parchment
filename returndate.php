<?php

include("conn.php");

$aid=$_SESSION['aid'];
$sql="SELECT DATE_FORMAT(date,'%D %M %Y') FROM tbl_status WHERE aid=$aid;";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

echo $row[0];

mysqli_close($con);
?>