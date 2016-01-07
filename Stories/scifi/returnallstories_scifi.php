<?php
include("../../conn.php");

$top=0;
if(isset($_GET['top']))
{
$top=$_GET['top'];
}
$bottom=10;
if(isset($_GET['top']))
{
$bottom=$_GET['bottom'];
}

$sql="SELECT title,id,url,author,DATE_FORMAT(date, '%D %M %Y'),aid,leadline,language FROM tbl_status WHERE type='s' AND status='a' AND genre='sf' AND language='e' LIMIT $top,$bottom;";

if(isset($_GET['sort']))
{
if($_GET['sort']=="d")
{
$sql="SELECT title,id,url,author,DATE_FORMAT(date, '%D %M %Y'),aid,leadline,language FROM tbl_status WHERE type='s' AND status='a' AND genre='sf' AND language='e' ORDER BY date DESC LIMIT $top,$bottom;";
}
else if($_GET['sort']=="a")
{
$sql="SELECT title,id,url,author,DATE_FORMAT(date, '%D %M %Y'),aid,leadline,language FROM tbl_status WHERE type='s' AND status='a' AND genre='sf' AND language='e' ORDER BY author LIMIT $top,$bottom;";
}
else if($_GET['sort']=="t")
{
$sql="SELECT title,id,url,author,DATE_FORMAT(date, '%D %M %Y'),aid,leadline,language FROM tbl_status WHERE type='s' AND status='a' AND genre='sf' AND language='e' ORDER BY title LIMIT $top,$bottom;";
}
else if($_GET['sort']=="l")
{
$sql="SELECT title,id,url,author,DATE_FORMAT(date, '%D %M %Y'),aid,leadline,language FROM tbl_status WHERE type='s' AND status='a' AND genre='sf' AND language='e' ORDER BY likes DESC LIMIT $top,$bottom;";
}
else if($_GET['sort']=="v")
{
$sql="SELECT title,id,url,author,DATE_FORMAT(date, '%D %M %Y'),aid,leadline,language FROM tbl_status WHERE type='s' AND status='a' AND genre='sf' AND language='e' ORDER BY views DESC LIMIT $top,$bottom;";
}
}


$result=mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{
$row = array_map('stripslashes', $row);
$aid=$row[5];

$sql2="SELECT count(id) FROM tbl_likes WHERE aid=$aid;";
$result2=mysqli_query($con,$sql2);
$row2=$result2->fetch_row();
$likes=$row2[0];

$sql2="SELECT count(ip) FROM tbl_reads WHERE aid=$aid;";
$result2=mysqli_query($con,$sql2);
$row2=$result2->fetch_row();
$views=$row2[0];

$sql2="SELECT avg(rating) FROM tbl_ratings WHERE aid=$aid;";
$result2=mysqli_query($con,$sql2);
$row2=$result2->fetch_row();
$rating=$row2[0];


echo "<div style=\"padding-left:130px;padding-right:100px;text-align:justify;position:relative;\">";
if($row[7]=="e") echo "<a href=\"../../" . $row[2] .  "\"><font style=\"font-family:Hand;font-size:2em;color:#fff;\"><u>" . $row[0] .  "</u></font></a>";
else echo "<a href=\"../../" . $row[2] .  "\"><font style=\"font-family:Hand;font-size:1.4em;color:#fff;\"><u>" . $row[0] .  "</u></font></a>";
echo "<h1 style=\"color:#fff;text-align:left;font-family:Hand;font-size:1.2em\"><u>Author:</u><a style=\"color:#fff;text-decoration:none\" href=\"../../profile.html?id=" . $row[1] . "\"> " . $row[3] . "</a></h1>";
echo "<h1 style=\"color:#fff;text-align:left;font-family:Hand;font-size:1.2em\"><u>Date Published:</u> " . $row[4] . "</h1>";
echo "<h1 style=\"color:#fff;text-align:left;font-family:Hand;font-size:1.2em\"><u>Average Reader's Ratings: </u></h1>";
$count=1;
while($count<=$rating)
{
echo "<img width=25 height=25 src=\"../../Images/star.png\">";
$count=$count+1;
}
if($rating==0)
{
echo "<h1 style=\"color:#fff;text-align:left;font-family:Hand;font-size:1.2em\">Not rated yet!</h1>";
}

if($row[7]=="e") echo "<h1 style=\"color:#fff;text-align:left;font-family:Hand;font-size:1.2em\">\"" . $row[6] . "\"</h1>";
else echo "<h1 style=\"color:#fff;text-align:left;font-family:Hand;font-size:1em\">\"" . $row[6] . "\"</h1>";
echo "<font style=\"color:#fff;position:absolute;left:900;top:50px;color:#fff;text-align:left;font-family:Hand;font-size:1.8em\">Likes-" . $likes . "</font>";
echo "<font style=\"colo:#fff;position:absolute;left:900;top:90px;color:#fff;text-align:left;font-family:Hand;font-size:1.8em\">Views-" . $views . "</font>";
echo "<br><br><br><br>";
echo "</div>";

}
mysqli_close($con);
?>