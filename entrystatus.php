<?php

include("conn.php");

$id=$_SESSION['id'];

mysqli_query($con , "SET character_set_results=utf8;");

$result = mysqli_query($con,"SELECT * FROM tbl_status WHERE id=$id");

$count=0;
while($row = mysqli_fetch_array($result))
{
$row = array_map('stripslashes', $row);

$count++;
echo "<h4 style=\"font-family:Hand;font-size:1.5em;color:#9b6c28;text-shadow:-2px 2px 2px #000;\">";
if($row[2]=="p")
{
echo "<img src=\"Images/pending.png\" width=75 height=75><br>";
echo $count . ") " . $row[1] . "<br>";
echo " Pending";
}
else if($row[2]=="a")
{
echo "<img src=\"Images/accepted.png\" width=75 height=75><br>";
echo $count . ") " .  $row[1] . "<br>";
echo " Accepted";
echo "<br>";
echo "<a href=\"$row[4]\">Here's your link!</a>";
}
else if($row[2]=="r")
{
echo "<img src=\"Images/rejected.png\" width=75 height=75><br>";
echo $count . ") " .  $row[1] . "<br>";
echo " Rejected";
}

}

if($count==0) echo "<h4 style=\"font-family:Hand;font-size:1.5em;color:#9b6c28;text-shadow:-2px 2px 2px #000;\"><br><br><br><br><br>You haven't submitted anything yet!<br><br>Do send us your Works! :)</h4>";
mysqli_close($con);
?>