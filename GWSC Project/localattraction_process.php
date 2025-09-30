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
        $attractiontype=trim($_POST['attraction']);
        $address=trim($_POST['address']);
        $description=trim($_POST['description']);
        $telephone=trim($_POST['telephone']);
        $photo_name=$_FILES['photo']['name'];
        $path= "photos" .$photo_name;
        $copied=copy($_FILES['photo']['tmp_name'],$path);
        if($copied) echo "Photo Uploaded!";
        
        $attractiontype = mysqli_real_escape_string($connection,$attractiontype);
        $address= mysqli_real_escape_string($connection,$address);
        $telephone= mysqli_real_escape_string($connection,$telephone);
        
            $sql = "insert into attraction(attraction_type,description,address,tel,attraction_photo)
            values('$attractiontype','$description','$address','$telephone','$path')";

                if (mysqli_query($connection, $sql))
                    echo "Local Attraction's Completed!";

                else echo "Local Attraction Error!";
    ?>
</body>
</html>
