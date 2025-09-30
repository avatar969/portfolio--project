<?php
	session_start();

	session_destroy();

	echo "Successfully Logout<br>";

	echo "<a href='login.php'>Login</a>";

	include("footer.php");
?>