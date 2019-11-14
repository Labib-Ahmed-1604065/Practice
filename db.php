<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="gittest";
$con=mysqli_connect($servername, $username, $password, $dbname);
if(!$con)
{
	die ('error'.mysql_connect_error);
}
else
{
	echo " successful ";
}
?>