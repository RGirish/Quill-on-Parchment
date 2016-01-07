<?php
include("conn.php");

$email=$_POST['email'];
$query=$_POST['query'];

$email = mysqli_real_escape_string($con, $email);
$query = mysqli_real_escape_string($con, $query);

mysqli_query($con, "INSERT into tbl_query (email,query) VALUES ('$email' , '$query')");
mysqli_close($con);
header('Location: contactus.html?query=2');

exit();

?>