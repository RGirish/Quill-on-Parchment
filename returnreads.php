<?php
include("conn.php");

$aid=$_SESSION['aid'];
$sql="SELECT count(ip) FROM tbl_reads WHERE aid=$aid;";
$result=mysqli_query($con,$sql);
$row=$result->fetch_row();
echo "<number style=\"font-size:2em\">" . $row[0] . "</number>";

mysqli_close($con);
?>