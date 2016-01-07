<?php
include("conn.php");

$email=$_POST['email'];
$feedback=$_POST['feedback'];

$email = mysqli_real_escape_string($con, $email);
$feedback = mysqli_real_escape_string($con, $feedback);

$sql="INSERT INTO tbl_feedback (email,feedback) VALUES('$email','$feedback');";

mysqli_query($con, $sql);
mysqli_close($con);

header('Location: contactus.html?feedback=2');

exit();

?>