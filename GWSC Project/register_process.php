<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Process</title>
</head>
<body>
    <?php
        include('connection.php');
        //default method GET
        //POST
        $firstname=trim($_POST['firstname']);
        $lastname=trim($_POST['lastname']);
        $username=trim($_POST['username']);
        $email=trim($_POST['email']);
        $phone=trim($_POST['phone']);
        $password=trim($_POST['password']);

			{

				$sql_existing_user = "select * from customer where username='$username'";

				$result = mysqli_query($connection,$sql_existing_user);

				$num_rows = mysqli_num_rows($result);

				if($num_rows==0){

   				 	$sql = "insert into customer(username,fname,lname,password,email,phone)
                    values('$username','$firstname','$lastname','$password','$email','$phone')";

    				if(mysqli_query($connection,$sql)) {
    					echo "<script>
    					       alert('User registration successfull!!'); 
    					       window.location = 'login.php';
    					      </script>";

    				}

    				else echo "registration Error!";
    			}
    			else{
    				echo "Existing username! Please register with other username again.<br>";
    			}
				
			}
    ?>
</body>
</html>
