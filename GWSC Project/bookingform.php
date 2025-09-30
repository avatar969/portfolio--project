<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>
    <?php include("bookingheader.php");?>
    <br>
    <br>
    <br>
    <div class="booking">
    <!-- <h1 class="heading-title">Book Now!</h1> -->
    <form action="booking_process.php" method='POST' class="book-form">
        <!-- <h1 class="heading-title">Book Now!</h1> -->
        <div class="flex">
        <div class="inputBox">
            <span>Name:</span>
            <input type="name" placeholder="enter your name" name="name">
        </div>
        <div class="inputBox">
            <span>Email:</span>
            <input type="name" placeholder="enter your email" name="email">
        </div>
        <div class="inputBox">
            <span>Phone:</span>
            <input type="name" placeholder="enter your name" name="phone">
        </div>
        <div class="inputBox">
            <span>Address:</span>
            <input type="name" placeholder="enter your adress" name="address">
        </div>
        <div class="inputBox">
            <span>Where to:</span>
            <input type="text" placeholder="place you want to visit" name="location">
        </div>
        <div class="inputBox">
            <span>How many:</span>
            <input type="number" placeholder="number of guests" name="guests">
        </div>
        <div class="inputBox">
            <span>Arrivals:</span>
            <input type="date" name="arrivals">
        </div>
        <div class="inputBox">
            <span>Leaving:</span>
            <input type="date" name="leaving">
        </div>
        </div>
        <input type="submit" value="submiit" class="botton" name="send">
    </form>
</div>
<br>
        <?php include("footer.php");?>
</body>
</html>