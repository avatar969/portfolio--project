<!DOCTYPE html>
<html>
  <head>
    <title>skip ad</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body style="height: 2000px">
	<header>
		<div id="logo"><span id="logo-s">GWSC</span></div>
        <!-- <div class="search-container">
    <form action="searchform.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div> -->
        <span class="sign"><a href="logout.php">LOOUT</a></span>
        <span class="sign"><a href="login.php">LOGIN</a></span>
        <!-- <span class="sign"><a href="#">ABOUT</a></span> -->
        <span class="sign"><a href="contactform.php">CONTACT US</a></span>
        <span class="sign"><a href="pitchlist.php">INFORMATION</a></span>
        <span class="sign"><a href="#">HOME</a></span>
	</header>
    <div class="slider">
      <!-- fade css -->
      <div class="myslide fade">
        <div class="txt">
          <h1>WELCOME</h1>
          <p>CampingSite<br />Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <img src="photo/h12.jpeg" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>WELCOME</h1>
          <p>CampingSite<br />Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <img src="photo/h11.jpg" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>WELCOME</h1>
          <p>CampingSite<br />Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <img src="photo/h7.jpg" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>WELCOME</h1>
          <p>CampingSite<br />Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <img src="photo/he2.jpg" style="width: 100%; height: 100%" />
      </div>

      <div class="myslide fade">
        <div class="txt">
          <h1>WELCOME</h1>
          <p>CampingSite<br />Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <img src="photo/he5.jpg" style="width: 100%; height: 100%" />
      </div>
      <!-- /fade css -->

      <!-- onclick js -->
      <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

      <div class="dotsbox" style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
      </div>
      <!-- /onclick js -->
    </div>

    <script src="js/script.js"></script>
  </body>
</html>