<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>
	<?php

		include("connection.php");

		// if(isset($_SESSION['counter']))
		// {
		// 	echo $_SESSION['counter'];
		// 	if($_SESSION['counter']>=3)
		// 	echo "<script>window.location='timer.php'</script>";
		// 	// include("timer.php");
		// }
		// else {
		// 	$_SESSION['counter']=1;
		// }

		// $username=$_POST['username'];
		// $password=$_POST['password'];

		// echo "<br>Username: ".$username."<hr>";

		// $sql = "select * from customer where username='$username' and password='$password'";

		// $result=mysqli_query($connection,$sql); 

  		// $num_rows=mysqli_num_rows($result);

  		// if($num_rows==0) {
		// 	// echo $_SESSION['counter'];
  		// 	$_SESSION['counter']++;  			
  			
  		// 	echo "<script>alert ('Invalid User! Please register at first!');
		// 			window.location = 'login.php';
		// 			</script>";  			
  		
		// }
  		// else {
  		// 	//echo "Valid User!";	

  		// 	$_SESSION['username'] = $username;
		// 	if($username=='@admin'){
		// 		echo "$username<hr>";
		// 		// $_SESSION['username'] = $username;
		// 		echo "<a href='pitchlist.php'>Pitch List</a>";
		// 	} 	
		// 	else{
		// 		echo "$username";
		// 		echo "<a href='pitchlist.php'>Pitch List</a>";
		// 	}	
		// }
		
		

		$username=$_POST['username'];
		$password=$_POST['password'];

		echo "<br>Username: ".$username."<hr>";

		$sql = "select * from customer where username='$username' and password='$password'";

		$result=mysqli_query($connection,$sql); 

  		$num_rows=mysqli_num_rows($result);

  		if($num_rows==0) {
			if(isset($_SESSION['counter'])){
				if($_SESSION['counter']>=3){
					$_SESSION['counter']=0;
					// setcookie("failure","1",time()+60); //60 sec
					echo "<script>window.location='timer.php'</script>";
					// include("timer.php");		
				}
				
			}else {
				$_SESSION['counter']=0;
			} 
  			$_SESSION['counter']++;  			
  			
  			echo "<script> alert('Invalid User! Please register at first!'); 
  				window.location = 'login.php';
  			    </script>";  			
  		}

  		else {
			$_SESSION['counter']=0;
  			//echo "Valid User!";	

  			$_SESSION['username'] = $username;
			//if($username=='@admin'){
				//echo "$username<hr>";
				echo "<script>window.location ='index.php'; </script>";
			} 	
	?>

</body>
</html>