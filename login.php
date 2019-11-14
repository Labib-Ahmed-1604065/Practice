<?php
require('db.php');
if(isset($_POST['username'])&&isset($_POST['password']))
{
	
	$userName=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$password=md5('$password');

	//$sql="INSERT INTO `user`(`username`, `password`) VALUES ('$userName', '$password')";
	$sql="SELECT * FROM `user` WHERE `username`='$userName' and `password`='$password'";
	$result=mysqli_query($con, $sql);
	$row=mysqli_fetch_array($result);
	
	echo $row['username'];
	echo $row['password'];
	if(mysqli_num_rows($result)>=1)
	{
		echo " logged in ";
	}
	else
	{
		echo " not ok ";
	}
	//echo $userName;
	//echo "  ";
	//echo $password;
	//echo "   ";
	echo $sql;
}
	
?>
<form action="login.php" method="POST">
	<label>username</label>
	<input type="text" name="username" ><br>
	<label>password</label>
	<input type="text" name="password" ><br>
	<input type="submit" name="Submit" >
</form>