<?php
session_start();
include("conn.php");
$aid=$_SESSION['aid'];

$ip= $_SERVER['REMOTE_ADDR'];

$sql2="SELECT * FROM tbl_reads WHERE ip='$ip' AND aid=$aid;";
$result=mysqli_query($con, $sql2);
$row=$result->fetch_row();
if($row[0]==null)
{
$sql="INSERT INTO tbl_reads(aid,ip) VALUES($aid,'$ip');";
mysqli_query($con, $sql);
$sqll="UPDATE tbl_status SET views=views+1 WHERE aid=$aid;"; 
mysqli_query($con, $sqll);
}

mysqli_close($con);
?>