<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Local Attractions</title>
</head>
<body>
	<?php
		include("connection.php");
		include("attractionheader.php");
		$pitchid = $_GET['pitchid'];

		$sql="select * from pitch_info where pitchid=$pitchid";

		$result=mysqli_query($connection,$sql);

		$record=mysqli_fetch_assoc($result);

		echo "<h3>".$record['pitch_name']."</h3>";
		

		$sql1="select * from attraction where pitchid=$pitchid";

		$result1=mysqli_query($connection,$sql1);

		$record1=mysqli_fetch_assoc($result1);

		$list=$record1['list']; //string

		echo $list;

		include("footer.php");
	?>
</body>
</html>