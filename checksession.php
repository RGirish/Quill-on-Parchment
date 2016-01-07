<?php
session_start();
if( isset($_SESSION['isloggedin']) && $_SESSION['isloggedin']==true)
{
	echo 1;
}
else
{
	echo 0;
}
?>