<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time();?>">
	<script src='https://www.google.com/recaptcha/api.js' async defer></script>
</head>
<style>
	body {
  margin: 0;
  padding: 0;
  background: linear-gradient(to bottom right, #f7f8f8, #acbb78);
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
}
</style>
<body class="gigi">
	

	<?php
	
		if(isset($_COOKIE['failure']))
		{
			echo "Please Try Again!<hr>";
			echo "<a href='login.php'>Login Form</a>";
		}
		else {

	?>

	<!-- <h1>Login Form</h1> -->
	<!-- <div class="center">
		<h1>Login</h1>
	<form action='login_process.php' method='POST'>
		<div class="txt_field"><input type="text"  name="username" ><span></span><label>Username</label></div>
		<div class="txt_field"><input type="password" name="password"><span></span><label>Password</label></div>
		<div class="g-recaptcha" data-type="image"  data-sitekey="6Lex-UknAAAAAINPIbWCXd8bz3z5CjgSYVHSem-r"></div>	
		<div><input type="submit" name="submit" value="Login" class="submit"></div> -->
		<!-- <div class="pass">Forgot Password?</div>
		<button type="submit" name="submit" value="Login" class="submit">Login</button>
		<div class="sign_up">
			Not a member?<a href="registerform.php">Register</a>
		</div>
	</form>
	</div>
    <?php  
			} 
	?> -->
	<div class="containn">
    <div class="carde">
        <form action='login_process.php' method='POST'>
          <h1>Login</h1>
            <input type="text"  name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
			<div class="g-recaptcha" data-type="image"  data-sitekey="6Lex-UknAAAAAINPIbWCXd8bz3z5CjgSYVHSem-r"></div>
            <button type="submit">Login</button>
        </form>
        <div class="switch">
            <span>Don't have an account?</span>
            <button><a href="registerform.php">Register</a></button>
        </div>
    </div>
</div>
	<!-- <hr>
	<div>
		<a href="registerform.php">Register</a>
	</div> -->


</body>
</html>