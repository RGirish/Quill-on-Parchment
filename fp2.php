<?php
session_start();

include("conn.php");

$answer1  = $_POST['answer1'];
$answer2  = $_POST['answer2'];
$username = $_SESSION['xusername'];
$email  = $_POST['email'];

$sql="SELECT username from tbl_users WHERE a1='$answer1' AND a2='$answer2' AND username='$username' AND email='$email';";
$result = mysqli_query($con, $sql);
$row=$result->fetch_row();

if($row[0]==null)
{
unset($_SESSION['xusername']);
header("Location: login.html?case=1");
}
else
{
header("Location: resetpassword.html");
}

?>