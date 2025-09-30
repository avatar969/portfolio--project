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
        $name=trim($_POST['name']);
        $email=trim($_POST['email']);
        $phone=trim($_POST['phone']);
        $address=trim($_POST['address']);
        $location=trim($_POST['location']);
        $guests=trim($_POST['guests']);
        $arrivals=trim($_POST['arrivals']);
        $leaving=trim($_POST['leaving']);
        
        $name = mysqli_real_escape_string($connection,$name);
        $email= mysqli_real_escape_string($connection,$email);
        $phone= mysqli_real_escape_string($connection,$phone);
        $address= mysqli_real_escape_string($connection,$address);
        $location= mysqli_real_escape_string($connection,$location);
        $guests= mysqli_real_escape_string($connection,$guests);
        $arrivals= mysqli_real_escape_string($connection,$arrivals);
        $leaving= mysqli_real_escape_string($connection,$leaving);
       
            $sql = "insert into booking(name,email,phone,address,location,guests,arrivals,leaving)
            values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

                if (mysqli_query($connection, $sql))
                    echo "Local Attraction's Completed!";

                else echo "Local Attraction Error!";
    ?>
</body>
</html>

