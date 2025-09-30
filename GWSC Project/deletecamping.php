<?php 
	session_start();

	include("connection.php");

	if(isset($_SESSION['username']))
	$username = $_SESSION['username'];
	if($username=="@admin")
	{
		$pitchid =  $_GET['pitchid'];

		$sql = "delete from pitch_info where pitchid=$pitchid"; //value

		if(mysqli_query($connection,$sql)) echo "Successfully Deleted!<br>";
		else echo "Deletion Error!<br>";
	}
	else {
		echo "Restricted page! Adminstrator only!";
	}
	include("connection.php");
?>