<?php
session_start();

include("conn.php");

$aid  = $_SESSION['aid'];
$id  = $_SESSION['id'];

$sql="SELECT rating from tbl_ratings WHERE id=$id AND aid=$aid;";
$result = mysqli_query($con, $sql);
$row=$result->fetch_row();
if($row[0]==null)
{
echo 0;
}
else
{
echo $row[0];
}
mysqli_close($con);
?>