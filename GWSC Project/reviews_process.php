<?php
	session_start();
	
	include("connection.php");

	$username = $_SESSION['username'];

	$pitchid =$_POST['pitchid'];
	$msg = $_POST['message'];

	$sql="insert into reviews(message,pitchid,username) values('$msg',$pitchid,'$username')";

	mysqli_query($connection,$sql);

	echo "<script>window.location='review.php?pitchid=".$pitchid."';</script>";

?>