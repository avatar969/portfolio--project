<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitch List</title>
</head>
<body>
    <?php
    include("connection.php");
    $sql="select * from pitch_info"; //all users
    //$sql="select * from user where lname='Aye'"; //specific user
    //$sql="select * from user where LIKE '%A%'"; //specific user
    $result=mysqli_query($connection,$sql);
    $num_rows=mysqli_num_rows($result);
    if($num_rows==0)echo "There is no information!<br>";
    for($i=0;$i<$num_rows;$i++) {
        $record = mysqli_fetch_assoc($result);
        echo "<div>";
        echo "<br><h3>" . $record['pitch_name']."</h3>";
        echo "Location:" . $record['location'];
        echo "<br>Features:" . $record['features'];
        echo "<br>General Info:" . $record['general_info'];
        //echo "<br>Pitch Type:" . $record['pitch_types'];
        echo "<br>Country:" . $record['country'];
        //echo "<br>Photo:" . $record['photo'];
        echo "<br><img src='".$record['photo']."'width='200'>";
        echo "<iframe src='".$record['map']."'></iframe>";
        echo "<br><a href='deletecamping.php?pitchid=".$record['pitchid']."'>Delete</a>";
        echo "|| <a href='updateform.php?id=".$record['pitchid']."'>Update</a>";
        echo "<hr></div>";
    }
	include("footer.php");
    ?>
</body>
</html>
