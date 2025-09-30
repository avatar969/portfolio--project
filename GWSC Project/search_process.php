<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Camping List</title>
	<link rel="stylesheet" type="text/css" href="css/style.css?<?php echo time();?>">
	 <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
	<?php

		include("connection.php");

		echo "<div id='google_translate_element'></div>";

		echo " <br> <a href='logout.php'>Logout</a>";

		$username = $_SESSION['username'];

		if($username=="@admin"){
			echo " || <a href='campingform.php'>Entry</a>";	
		}
		echo "<hr>";
		echo $username;
		echo "<hr>";

		$search_key=$_POST['search-key'];

		$sql= "select * from pitch_info where pitch_name LIKE '%$search_key%' or country LIKE '%$search_key%' or location LIKE '%$search_key%'";	

		$result=mysqli_query($connection,$sql);

		$num_rows=mysqli_num_rows($result); //no connection
		

		if($num_rows==0) echo "There is no information!<br>";


		for($i=0;$i<$num_rows;$i++)
		{
			$record=mysqli_fetch_assoc($result);  //associative array

				// echo "<div class='row'>";				

				// echo "<div><h3>".$record['pitch_name']."</h3></div>";

				// echo "<div class='row'>";				

				// //echo "Location:".$record['location'];

				// echo "<div class='col-5 col-m-5 col-s-12'><iframe src='".$record['location']."' width='300'></iframe></div>";

				// echo "<div class='col-4 col-m-4 col-s-12'>Address:".$record['address']."</div>";
				// echo "<div class='col-3 col-m-3 col-s-12'>Country:".$record['country']."</div>";

				// echo "</div>
				//       <div class='row'>";


				// echo "<div class='general-info col-6 col-m-6 col-s-12'><h4>General Information:</h4>".$record['general']."</div>";

				// //echo "<br>Photo:".$record['photo'];

				// echo "<div class='col-5 col-m-5 col-s-12'>
				//         <img class='info-photo' src='".$record['photo']."'></div>";

				// echo "</div>";


	// 			if($username=="admin"){


	// 			 $pitchid = $record['pitchid'];


	// 			echo "<hr><a href='#' onclick='deleteConfirm(".json_encode($pitchid).")'>Delete</a>";

	// 			echo " || <a href='updateform.php?pitchid=".$record['pitchid']."'>Update</a> ||";
									
	// 		   } 

	// echo " <a href='features.php?id=".$record['id']."'>Features</a> ||";
	// echo " <a href='attractions.php?id=".$record['id']."'>Local Attractions</a> ||";
	// echo " <a href='reviews.php?id=".$record['id']."'>Reviews</a>";
				
	// 		   echo "<hr></div>";			

	// 	}	 //end of the loop

	// 	include("footer.php");

	// 
				echo "<div>";
        		echo "<br><h3>" . $record['pitch_name']."</h3>";
        		echo "Location:" . $record['location'];
        		echo "<br>Features:" . $record['features'];
        		echo "<br>General Info:" . $record['general_info'];
        		echo "<br>Pitch Type:" . $record['pitch_types'];
        		echo "<br>Country:" . $record['country'];
        //echo "<br>Photo:" . $record['photo'];
        		echo "<br><img src='".$record['photo']."'width='200'>";
        echo "<iframe src='".$record['map']."'></iframe>";
        if($username=="@admin"){
        echo "<br><a href='deletecamping.php?pitchid=".$record['pitchid']."'>Delete</a>";
        echo "|| <a href='updateform.php?pitchid=".$record['pitchid']."'>Update</a>";
        echo "|| <a href='pitchform.php?pitchid=".$record['pitchid']."'>Entry</a>";
        
        }
        echo "||<a href='features.php?pitchid=".$record['pitchid']."'>Features</a> ||";
	    echo " <a href='attraction.php?pitchid=".$record['pitchid']."'>Local Attractions</a> ||";
	    echo " <a href='review.php?pitchid=".$record['pitchid']."'>Reviews</a>";
        echo "<hr></div>";
		}
	?>



	<script>
	
		function deleteConfirm(pitchid)
		{		

			if(confirm("Are you sure you want to delete?"))
			{
				window.location = "deletecamping.php?pitchid="+pitchid;
			}
		}


		document.getElementById("page-title").innerHTML = "You are at <b>Search</b> page.";

	</script>

	<script type="text/javascript">
        function googleTranslateElementInit() {
       new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }
</script>

</body>
</html>