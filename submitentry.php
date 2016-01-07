<?php
session_start();
include("conn.php");

$type=$_POST['mainselect'];
if($type=="s") $genre=$_POST['storyselect'];
else if($type=="r") $genre=$_POST['reviewselect'];
else $genre=NULL;
$leadline=$_POST['leadline'];
$article=$_POST['article'];
$title=$_POST['title'];
$id=$_SESSION['id'];
$firstname=$_SESSION['firstname'];
$lastname=$_SESSION['lastname'];
$author=$firstname . " " . $lastname;

$article=mysqli_real_escape_string($con, $article);
$title=mysqli_real_escape_string($con, $title);
$leadline=mysqli_real_escape_string($con, $leadline);
$author=mysqli_real_escape_string($con, $author);
$date = date('d-m-Y');

$sql="INSERT INTO tbl_submissions(type,genre,article,title,id,leadline,date) VALUES ('$type' , '$genre' , '$article' , '$title' , $id , '$leadline' , '$date');";
$sql2="INSERT INTO tbl_status(language,title,status,id,author,type,genre,leadline) VALUES ('e','$title' , 'p' , $id , '$author' , '$type' , '$genre' , '$leadline');";

if (!mysqli_query($con,$sql))
{
  die('Error: ' . mysqli_error($con));
}
if (!mysqli_query($con,$sql2))
{
  die('Error: ' . mysqli_error($con));
}

mysqli_close($con);

header('Location: myentries.html');

exit();
?>