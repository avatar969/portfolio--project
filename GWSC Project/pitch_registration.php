<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitch Information Entry</title>
</head>
<body>
    <?php
    include("connection.php");
         //default method GET
        //POST
        $pitchname=trim($_POST['pitchname']);
        $location=trim($_POST['location']);
        $general=trim($_POST['general']);
        $country=trim($_POST['country']);
        $features=trim($_POST['features']);
        $pitchtypes=trim($_POST['pitchtypes']);
        $map=trim($_POST['map']);
        $photo_name=$_FILES['photo']['name'];
        $path= "photo/" .$photo_name;
        $copied=copy($_FILES['photo']['tmp_name'],$path);
        if($copied) echo "Photo Uploaded!";

        $pitchname = mysqli_real_escape_string($connection,$pitchname);
        $location = mysqli_real_escape_string($connection,$location);
        $general= mysqli_real_escape_string($connection,$general);
        $pitchtypes= mysqli_real_escape_string($connection,$pitchtypes);
        $features= mysqli_real_escape_string($connection,$general);
        $map= mysqli_real_escape_string($connection,$general);

//            $sql_existing_name = "select * from pitch_info where pname='$pname'";
//            $result = mysqli_query($connection,$sql_existing_name);
//            $num_rows = mysqli_num_rows($result);
//            if($num_rows==0) {
                $sql = "insert into pitch_info(pitch_name,country,location,general_info,features,pitch_types,photo,map)
            values('$pitchname','$country','$location','$general','$features','$pitchtypes','$path','$map')";

                if (mysqli_query($connection, $sql))
                    echo "Pitch registration successful!";

                else echo "Registration Error!";
//            }
//            else{
//                echo "Existed pitch! Please register with other pitch again.<br>";
//            }

    ?>
</body>
</html>
