<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Attraction</title>
</head>
<body>
    <h1>Near by attraction</h1>
    <form action='localattraction_process.php' method='POST' enctype="multipart/form-data">
        <div><label for="attractiontype">Attraction Type:</label><input type="text" name="attraction" id="attraction"></div>
        <div><label for="address">Address:</label><input type="text" name="address" id="address"></div>
        <div><label for="description">Description:</label><input type="text" name="description" id="description"></div>
        <div><label for="telephone">Tel:</label><input type="text" name="telephone" id="telephone"></div>
        <div>
            <label for='photo'>Attraction Photo:</label>
            <input type='file' name='photo' id='photo'>
        </div>
        <br>
        <div>
            <input type="submit" name="submit" value="Local Attraction Entry"><input type="reset" name="reset" value="Clear">
        </div>
        </form>
        <?php include("footer.php");?>
</body>
</html>