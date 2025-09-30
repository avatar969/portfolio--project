<?php

	include("connection.php");

	$pitchid =  $_POST['pitchid'];

	$pitchname = $_POST['pitch_name'];
	$general_info = $_POST['general_info'];
	$country = $_POST['country'];

	$sql = "update pitch_info set country='$country',pitch_name='$pitchname', general_info='$general_info' where pitchid=$pitchid"; //value

	if(mysqli_query($connection,$sql)) 
		echo "Successfully Updated!<br>";
	else echo "Updating Error!<br>";

?>