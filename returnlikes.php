<?php
include("conn.php");

$aid=$_SESSION['aid'];
$sql="SELECT count(id) FROM tbl_likes WHERE aid=$aid;";
$result=mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);

echo "<font style=\"font-size:2em\">" . "$row[0]" . "</font>";
$_SESSION['nolikes']=$row[0];

mysqli_close($con);
?>