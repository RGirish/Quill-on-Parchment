<?php
session_start();

include("conn.php");

$username = $_POST['username'];
$lastname = $_POST['lastname'];

$sql="SELECT q1,q2 from tbl_users WHERE username='$username' AND lastname='$lastname';";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_row($result);
if($row[0]==null)
{
unset($_SESSION['xusername']);
header("Location: login.html?case=1");
}
else
{
$_SESSION['xusername']=$username;
header("Location: forgotpassword2.html?q1=" . $row[0] . "&q2=" . $row[1]);
}

?>