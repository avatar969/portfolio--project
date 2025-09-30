<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
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
<body>
    <!--  <form action='register_process.php' method='POST'>
        <div><label for="firstname">First Name:</label><input type="text" name="firstname" id="firstname"></div><br>
        <div><label for="lastname">Last Name:</label><input type="text" name="lastname" id="lastname"><br><br>
        <div><label for="username">Username:</label><input type="text" name="username" id="username"></div><br>
        <div><label for="password">Password:</label><input type="" name="password" id="password"></div><br>
        <div><label for="email">email:</label><input type="email" name="email" id="email"></div><br>
        <div><label for="phone">Phone No.:</label><input type="number" name="phone" id="phone"></div><br>
        <div class="g-recaptcha" data-type="image"  data-sitekey="6Lex-UknAAAAAINPIbWCXd8bz3z5CjgSYVHSem-r"></div>
            </select>
        </div><br>
        <div><input type="submit" name="submit" value="Register"><input type="reset" name="reset" value="Clear"></div>
        </form>
        
        <br>
        <a href="displayuser.php">User List</a> -->
        
        
    <div class="containn">
    <div class="carde">
        <form action='register_process.php' method='POST'>
          <h1>Register</h1>
            <input type="text"  name="firstname" placeholder="Firstname">
            <input type="text"  name="lastname" placeholder="Lastname">
            <input type="text"  name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="text"  name="email" placeholder="Email">
            <input type="text"  name="phone" placeholder="Phone">
            <div class="g-recaptcha" data-type="image"  data-sitekey="6Lex-UknAAAAAINPIbWCXd8bz3z5CjgSYVHSem-r"></div>
            <!-- <input type="submit" name="submit" value="Register"><input type="reset" name="reset" value="Clear"> -->
            <button type="submit"  value="Register">Register</button>
            <button type="submit"  value="Clear">Clear</button>
        </form>
        <br>
        <!-- <a href="displayuser.php">User List</a> -->
    </div>
</div>

</body>
</html>