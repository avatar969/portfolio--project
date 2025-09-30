<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<?php include("header.php") ?>
	<div id="google_translate_element"></div>
	<div class="wearable">
		<div class="roe">
			<div class="head">
				<h1>Wearable Technologies</h1>
				<p>Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration. 
				It serves as a place holder indicating where the text will be in the final iteration. Originally from Latin, Lorem ipsum has no intelligible meaning.</p>
			</div>
			<div class="content">
				<div class="card">
					<img class="image" src="photo/clock.jpg">
					<h4>Categories 1</h4>
					<p>Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration.</p>
				</div>
				<div class="card">
					<img class="image" src="photo/cool.jpg">
					<h4>Categories 2</h4>
					<p>Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration.</p>
				</div>
				<div class="card">
					<img class="image" src="photo/camera.jpg">
					<h4>Categories 3</h4>
					<p>Lorem ipsum is the filler text that typically demonstrates the font and style of a text in a document or visual demonstration.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="map">
		<h1>Our Location</h1>
		<iframe class="orange" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.7888330189276!2d103.90722984483759!3d1.301610102650278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da22b906ff05d1%3A0xaffda4da354a96fa!2sEast%20Coast%20Park!5e0!3m2!1sen!2ssg!4v1690109520322!5m2!1sen!2ssg" 
			width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><br>
		<iframe class="orange" width="560" height="315" src="https://www.youtube.com/embed/y0wXQ5EdW_0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
	</div><br>
	<?php include("viewcounter.php") ?>
	<?php include("footer.php") ?>
	<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script>
		function googleTranslateElementInit(){
			new google.translate.TranslateElement(
				{pageLanguage: 'en'},
				'google_translate_element'
			);
		}
	</script>
</body>
</html>