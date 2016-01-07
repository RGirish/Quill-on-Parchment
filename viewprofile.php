<?php
session_start();
include("conn.php");

$id=$_GET['id'];
$sql="SELECT firstname,lastname,about FROM tbl_users WHERE id=$id;";


$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$row = array_map('stripslashes', $row);


echo "<br><br><br><br>";
echo "<name style=\"font-family:Hand;font-size:2em;text-shadow:-2px 2px 2px #000;color:#fff\">";
echo "<u>$row[0] $row[1]</u>:  ";
echo "<br><br><u>About the Author:</u><br><br>";
echo "<about style=\"font-size:0.75em;\">" . $row[2] . "</about>";
echo "</name>";
echo "<br><br><br>";


$sql2="SELECT title,url,language FROM tbl_status WHERE id=$id AND status='a' AND type='s';";
mysqli_query($con , "SET character_set_results=utf8;");
$result2=mysqli_query($con,$sql2);
$row3=$result2->fetch_row();

$result2=mysqli_query($con,$sql2);
$sno=1;
if($row3!=null)
{
echo "<u style=\"font-family:Hand;font-size:2em;color:#fff\">Stories</u><br>";
while($row2 = mysqli_fetch_array($result2))
{
$row2 = array_map('stripslashes', $row2);
echo "<font style=\"color:#fff;font-size:2em;font-family:Hand\">" . $sno . ")</font>&nbsp;&nbsp;&nbsp;";
if($row2[2]=="e") echo "<a style=\"color:#fff;text-decoration:none;font-size:2em;font-family:Hand\" href=\"$row2[1]\">" . "$row2[0]" . "</a> <br><br>";
else if($row2[2]=="t") echo "<a style=\"color:#fff;text-decoration:none;font-size:1.4em;font-family:Hand\" href=\"$row2[1]\">" . "$row2[0]" . "</a> <br><br>";
$sno=$sno+1;
}
echo "<br><br>";
}


$sql2="SELECT title,url FROM tbl_status WHERE id=$id AND status='a' AND type='p';";
$result2=mysqli_query($con,$sql2);
$row3=$result2->fetch_row();
$result2=mysqli_query($con,$sql2);
$sno=1;
if($row3!=null)
{
echo "<u style=\"font-family:Hand;font-size:2em;color:#fff\">Poems</u><br>";
while($row2 = mysqli_fetch_array($result2))
{
$row2 = array_map('stripslashes', $row2);
echo "<font style=\"color:#fff;font-size:2em;font-family:Hand\">" . $sno . ")</font>&nbsp;&nbsp;&nbsp;";
echo "<a style=\"color:#fff;text-decoration:none;font-size:2em;font-family:Hand\" href=\"$row2[1]\">" . "$row2[0]" . "</a> <br><br>";
$sno=$sno+1;
}
echo "<br><br>";
}


$sql2="SELECT title,url FROM tbl_status WHERE id=$id AND status='a' AND type='r';";
$result2=mysqli_query($con,$sql2);
$row3=$result2->fetch_row();
$result2=mysqli_query($con,$sql2);
$sno=1;
if($row3!=null)
{
echo "<u style=\"font-family:Hand;font-size:2em;color:#fff\">Reviews</u><br>";
while($row2 = mysqli_fetch_array($result2))
{
$row2 = array_map('stripslashes', $row2);
echo "<font style=\"color:#fff;font-size:2em;font-family:Hand\">" . $sno . ")</font>&nbsp;&nbsp;&nbsp;";
echo "<a style=\"color:#fff;text-decoration:none;font-size:2em;font-family:Hand\" href=\"$row2[1]\">" . "$row2[0]" . "</a> <br><br>";
$sno=$sno+1;
}
echo "<br><br>";
}



$sql2="SELECT title,url FROM tbl_status WHERE id=$id AND status='a' AND type='t';";
$result2=mysqli_query($con,$sql2);
$row3=$result2->fetch_row();
$result2=mysqli_query($con,$sql2);
$sno=1;
if($row3!=null)
{
echo "<u style=\"font-family:Hand;font-size:2em;color:#fff\">Travel</u><br>";
while($row2 = mysqli_fetch_array($result2))
{
$row2 = array_map('stripslashes', $row2);
echo "<font style=\"color:#fff;font-size:2em;font-family:Hand\">" . $sno . ")</font>&nbsp;&nbsp;&nbsp;";
echo "<a style=\"color:#fff;text-decoration:none;font-size:2em;font-family:Hand\" href=\"$row2[1]\">" . "$row2[0]" . "</a> <br><br>";
$sno=$sno+1;
}
echo "<br><br>";
}


$sql2="SELECT title,url FROM tbl_status WHERE id=$id AND status='a' AND type='f';";
$result2=mysqli_query($con,$sql2);
$row3=$result2->fetch_row();
$result2=mysqli_query($con,$sql2);
$sno=1;
if($row3!=null)
{
echo "<u style=\"font-family:Hand;font-size:2em;color:#fff\">Food</u><br>";
while($row2 = mysqli_fetch_array($result2))
{
$row2 = array_map('stripslashes', $row2);
echo "<font style=\"color:#fff;font-size:2em;font-family:Hand\">" . $sno . ")</font>&nbsp;&nbsp;&nbsp;";
echo "<a style=\"color:#fff;text-decoration:none;font-size:2em;font-family:Hand\" href=\"$row2[1]\">" . "$row2[0]" . "</a> <br><br>";
$sno=$sno+1;
}
echo "<br><br>";
}



$sql2="SELECT title,url FROM tbl_status WHERE id=$id AND status='a' AND type='o';";
$result2=mysqli_query($con,$sql2);
$row3=$result2->fetch_row();
$result2=mysqli_query($con,$sql2);
$sno=1;
if($row3!=null)
{
echo "<u style=\"font-family:Hand;font-size:2em;color:#fff\">Others</u><br>";
while($row2 = mysqli_fetch_array($result2))
{
$row2 = array_map('stripslashes', $row2);
echo "<font style=\"color:#fff;font-size:2em;font-family:Hand\">" . $sno . ")</font>&nbsp;&nbsp;&nbsp;";
echo "<a style=\"color:#fff;text-decoration:none;font-size:2em;font-family:Hand\" href=\"$row2[1]\">" . "$row2[0]" . "</a> <br><br>";
$sno=$sno+1;
}
echo "<br><br>";
}


mysqli_close($con);
?>