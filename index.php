<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Sarah V G&oacute;mez</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet"  href="styles.css">
	</head>
	<body>
        <header>
        	<h1><a href="index.php">Sarah V G&oacute;mez</a> | <span>selected works</span></h1>
		<nav>
			<a href="">Resume</a>
			<a href="contact.php">Contact</a>
		</nav>
        </header>

	<main class="workContainer">
		<div class="slides fade">
		  <img src="images/Branding_AFCC.png">
		  <div class="caption">Logo Proposal for AFFC rebranding.</div>
		</div>
	      
		<div class="slides fade">
		  <img src="images/Branding_mynte.png">
		  <div class="caption">Logo for Marketing Company (academic exercise)</div>
		</div>
	      
		<div class="slides fade">
		  <img src="images/Webdesign_peachnteal.png">
		  <div class="caption">Web design &amp; development for Peach &amp; Teal</div>
		</div>
	      <div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	      </div>
	      <br>
	      
	      <div class="dotsContainer" style="text-align:center">
		<span class="dotsContainer--dot" onclick="currentSlide(1)"></span> 
		<span class="dotsContainer--dot" onclick="currentSlide(2)"></span> 
		<span class="dotsContainer--dot" onclick="currentSlide(3)"></span> 
	      </div>
	</main>
	<footer><p>Copyright &copy; 2018 Sarah G&oacute;mez. All rights reserved.</p></footer>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dotsContainer--dot");
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  dots[slideIndex - 1].className += " active";
}
</script>
	</body>
</html>