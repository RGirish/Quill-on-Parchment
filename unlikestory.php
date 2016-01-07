<?php
session_start();

include("conn.php");

$aid=$_GET['aid'];



$id=$_SESSION['id'];
$sql="DELETE FROM tbl_likes WHERE id=$id AND aid=$aid;";
mysqli_query($con, $sql);

$sqll="UPDATE tbl_status SET likes=likes-1 WHERE aid=$aid;"; 
mysqli_query($con, $sqll);

$sql2="SELECT COUNT(id) FROM tbl_likes WHERE aid=$aid;";
$result=mysqli_query($con, $sql2);
$row=$result->fetch_row();
echo "<font style=\"font-size:2em\">" . $row[0] . "</font>";

mysqli_close($con);
?>