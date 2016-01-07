<?php
session_start();

include("conn.php");

$aid=$_SESSION['aid'];
$id=$_SESSION['id'];

$sql="SELECT * from tbl_likes WHERE id='$id' AND aid='$aid';";
$result = mysqli_query($con, $sql);
$row=$result->fetch_row();
if($row[0]==null)
{
echo 0;
}
else
{
echo 1;
}
?>