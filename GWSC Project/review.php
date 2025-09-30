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
		include("reviewheader.php");
		$pitchid = $_GET['pitchid'];

		$sql="select * from pitch_info where pitchid=$pitchid";

		$result=mysqli_query($connection,$sql);

		$record=mysqli_fetch_assoc($result);

		echo "<h3>".$record['pitch_name']."</h3>";
		

		$sql1="select * from reviews where pitchid=$pitchid";

		$result1=mysqli_query($connection,$sql1);

		$num_rows = mysqli_num_rows($result1);

		if($num_rows==0)echo "No reviews!";
		else
		{
			for($i=0;$i<$num_rows;$i++)
			{
				$record1=mysqli_fetch_assoc($result1);

				echo "<li>".$record1['message']." by <b>".$record1['username']."</b></li>";
			}
		}

	?>
	<hr>
	<div>
	<form action='reviews_process.php' method='post'>
	<?php	
	  echo	"<input type='hidden' name='pitchid' value='$pitchid'>";
	?>
		Enter your message:
		<textarea name='message'></textarea><br>
		<input type='submit' name='submit' value='Submit'>
	</form>
 </div>
 <?php include("footer.php");?>
</body>
</html>