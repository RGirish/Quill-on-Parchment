<?php

session_start();

include("conn.php");

$aid=$_GET['aid'];

$sql="SELECT id,comment FROM tbl_comments WHERE aid=$aid;";
$result=mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{
$row = array_map('stripslashes', $row);
echo "<br>";
$sql2="SELECT firstname FROM tbl_users WHERE id=$row[0];";
$result2=mysqli_query($con,$sql2);
$row2 = mysqli_fetch_array($result2);
$row2 = array_map('stripslashes', $row2);
echo "<name style=\"font-size:1.3em;text-shadow:-5px 5px 5px #000\">";
echo "<u>$row2[0]</u>:  ";
echo "</name>";
echo "$row[1]";
echo "<br>";
}

mysqli_close($con);
?>