<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
    <title>Grocery Mart</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

  
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin:;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
div.gallery {
  border: 1px solid #ccc;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

* {
  box-sizing: border-box;
}

.responsive {
  padding: 0 6px;
  float: left;
  width: 24.99999%;
}

@media only screen and (max-width: 700px) {
  .responsive {
    width: 49.99999%;
    margin: 6px 0;
  }
}

@media only screen and (max-width: 500px) {
  .responsive {
    width: 100%;
  }
}

.clearfix:after {
  content: "";
  display: table;
  clear: both;
}
p offer{
  text-align: center;
  font-size: 60px;
  margin-top: 0px;
  text-shadow: 2px 2px 5px red;
  color: blue;
}
h1.offer{
  text-shadow: 2px 2px 5px red;

  color: red;
}


</style>
</head>
<body>
<!--Load Header using PHP-->
    <div> <?php include 'header.php';?> <br> </div> <br>
	<center><marquee><h1 class="offer">TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER &nbsp;TODAY'S OFFER </h1></center></marquee>
<br>
<br>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="../images/Offer/banner.jpg" width="800" height="300"  ">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="../images/Offer/banner2.jpg" width="800" height="300">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="../images/Offer/offer2.jpg" width="800" height="300">
 
</div>
</div>

<br>


<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<br>
<br>
<p id="demo"></p>

<script>
// Set the date we're counting down to
var countDownDate = new Date("oct 25, 2020 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>

<br>
<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="mouse.jpg">
      <img src="../images/Offer/mouse3.jpg" alt="Mouse" width="600" height="400">
    </a>
    <div class="desc"><b>WIRELESS MOUSE<br><br><a href="../images/Offer/mouse3.jpg">$12.34</a></b> <br><br>45% Off</div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="fog.png">
      <img src="../images/Offer/fog.png" alt="Forest" width="600" height="200">
    </a>
    <div class="desc"><b>FOGG PERFUME<br><br><a href="../images/Offer/fog.png">$8.24</a></b> <br><br>18% Off</div> 
</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="cho.png">
      <img src="../images/Offer/th.jpg" alt="Northern Lights" width="600" height="100">
    </a>
    <div class="desc"><b>JBL BLUTOOTH HEADSET<br><br><a href="../images/Offer/th.jpg">$18.44</a></b> <br><br>38% Off</div> 
</div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="choo.jpg">
      <img src="../images/Offer/choo.jpg" alt="Mountains" width="600" height="400">
    </a>
    <div class="desc"><b>FERRERO ROCHER CHOCHOLATE<br><br><a href="../images/Offer/choo.jpg">$15.44</a></b> <br><br>16% Off</div> 
  </div>
</div>
<br>
<br>
<br>
<a href=""><img src="../images/Offer/faceb.png" alt="facebook" width="100" height="100"></a>
<img src="../images/Offer/gmail.png" alt="facebook" width="100" height="100">
<img src="../images/Offer/twitter.png" alt="facebook" width="100" height="100">
<img src="../images/Offer/insta.png" alt="facebook" width="100" height="100">

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
	
		
		
	<!--Load Footer using PHP-->
    <div><?php include '../html/footer.html';?></div>
</body>
</html> 
