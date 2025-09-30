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
        
        $firstname=trim($_POST['firstname']);
        $lastname=trim($_POST['lastname']);
        $email=trim($_POST['email']);
        $phno=trim($_POST['phno']);
        $message=trim($_POST['message']);
        
        $firstname= mysqli_real_escape_string($connection,$firstname);
        $lastname= mysqli_real_escape_string($connection,$lastname);
        $email= mysqli_real_escape_string($connection,$email);
        $phno= mysqli_real_escape_string($connection,$phno);
        $message= mysqli_real_escape_string($connection,$message);
        
            $sql = "insert into contact(fname,lname,email,phone,message)
            values('$firstname','$lastname','$email','$phno','$message')";

                if (mysqli_query($connection, $sql))
                    echo "Contact Us Successful";

                else echo "Contact Us Error!";
    ?>
</body>
</html>

