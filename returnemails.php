<?php
include("conn.php");

$sql="SELECT email FROM tbl_users;";
$result=mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{
echo $row[0] . ";";
}

mysqli_close($con);
?>