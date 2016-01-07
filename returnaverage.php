<?php

include("conn.php");

$aid=$_SESSION['aid'];
$sql="SELECT ROUND(AVG(rating),2) FROM tbl_ratings WHERE aid=$aid;";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
echo "<font style=\"font-size:2em\">" . "$row[0]" . "</font>";
mysqli_close($con);
?>