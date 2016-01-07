<?php
include("../conn.php");

$sql="SELECT name,price,url,imageurl FROM tbl_store;";

$result=mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{

echo "<div style=\"padding-left:100px;padding-right:100px;text-align:justify;position:relative;\">";
echo "<font style=\"font-family:Hand;font-size:1.7em;color:#fff;\">" . $row[0] . "</font>";
echo "<h1 style=\"color:#fff;text-align:left;font-family:Hand;font-size:1.7em\">" . $row[1] . "</h1>";
echo "<a href=\"$row[2]\"><input type=\"button\" style=\"cursor:hand;\" class=\"submt\" value=\"\"></a>";
echo "<img style=\"border:4px black solid;position:absolute;left:700;top:-15px;\" src=\"$row[3]\" width=300 height=150/>";
echo "</div>";
echo "<br><br><br><br>";

}
mysqli_close($con);
?>