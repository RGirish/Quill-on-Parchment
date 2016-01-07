<?php

include("conn.php");

$username=$_GET['uname'];

$query="SELECT username FROM tbl_users WHERE username='$username';";

$result = mysqli_query($con, $query);
$row=$result->fetch_row();
$row = array_map('stripslashes', $row);
if($row[0]==null) echo 0;
else echo 1;

mysqli_close($con);
?>