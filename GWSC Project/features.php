<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Features</title>
</head>
<body>
	<?php
		include("connection.php");
		include("featureheader.php");
		$pitchid = $_GET['pitchid'];

		$sql="select * from pitch_info where pitchid=$pitchid";

		$result=mysqli_query($connection,$sql);

		$record=mysqli_fetch_assoc($result);

		echo "<h3>".$record['pitch_name']."</h3>";

		
		$sql="select * from features where pitchid=$pitchid";

		$result=mysqli_query($connection,$sql);

		$record=mysqli_fetch_assoc($result);

		$list=$record['list']; //string

		$arr = explode(", ", $list);
		echo "<ol>";
		foreach($arr as $v)
		{
			echo "<li>$v</li>";
		}
		echo "</ol>";

		include("footer.php");
	?>
</body>
</html>