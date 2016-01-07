<?php

include("conn.php");

$aid=$_SESSION['aid'];
mysqli_query($con , "SET character_set_results=utf8;");
$sql="SELECT title FROM tbl_status WHERE aid=$aid;";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
$row = array_map('stripslashes', $row);
echo $row[0];

mysqli_close($con);
?>