<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pitch List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    session_start();
    include("connection.php");
    include("headers.php");
    // echo "<a href='logout.php'>Logout</a>";
    // $username = $_SESSION['username'];
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
        echo "<br>Country:" . $record['country'];
        //echo "<br>Photo:" . $record['photo'];
        echo "<br><img src='".$record['photo']."'width='200'>";
        echo "<iframe src='".$record['map']."'></iframe>";
        if($username=="@admin"){
        echo "<br><a href='deletecamping.php?pitchid=".$record['pitchid']."'>Delete</a>";
        echo "|| <a href='updateform.php?pitchid=".$record['pitchid']."'>Update</a>";
        echo "|| <a href='pitchform.php?pitchid=".$record['pitchid']."'>Entry</a>";
        
        }
        
        echo "<br><a href='features.php?pitchid=".$record['pitchid']."'class='button'>Features</a> ||";
	    echo " <a href='attraction.php?pitchid=".$record['pitchid']."'>Local Attractions</a> ||";
        echo " <a href='bookingform.php?pitchid=".$record['pitchid']."'>Book Now</a> ||";
	    echo " <a href='review.php?pitchid=".$record['pitchid']."'>Reviews</a>";
        echo "<hr></div>";
    }
    include("footer.php");
    ?>
</body>
</html>