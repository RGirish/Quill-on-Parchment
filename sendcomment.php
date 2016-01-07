<?php
session_start();

include("conn.php");

$aid=$_POST['aid'];
$id=$_SESSION['id'];
$comment=$_POST['comment'];
$comment = mysqli_real_escape_string($con, $comment);

$sql="INSERT INTO tbl_comments (id,aid,comment) VALUES($id,$aid,'$comment');";

mysqli_query($con, $sql);
mysqli_close($con);
?>