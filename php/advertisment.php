<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
    <title>Grocery Mart</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}
</style>
</head>
<body>
 <div> <?php include 'header.php';?> <br> </div> <br>
<h3 align="center" > IF YOU CAN'T STOP THINK ABOUT IT </h3>
<h1 align="center"> Buy IT </h1>
<div style="max-width:100%; max-height:400px" >
<img class="mySlides" src="../images/GiftCard/ad5.jpeg" style="width:100%; height:400px">
  <img class="mySlides" src="../images/GiftCard/ad4.jpeg" style="width:100%; height:400px">
  <img class="mySlides" src="../images/GiftCard/ad3.jpeg" style="width:100%; height:400px">
  <img class="mySlides" src="../images/GiftCard/ad2.jpeg" style="width:100%; height:400px">
  <img class="mySlides" src="../images/GiftCard/ad1.jpeg" style="width:100%; height:400px">
</div>
<br>
<br>
<div>

<div class="mySlides1" style="column-count: 3">
  <img  src="../images/GiftCard/cl1.jpeg" style="width:80%; height:400px; margin-left:10%">
  <h3 align="center">Don't pay too much on your hair cosmetics...Heres the loreal offers you with the best </h3>
  <br>
  <h1 align="center" style="color: red" >Buy 2 and Get a conditioner free </h1>
  <img  src="../images/GiftCard/cl2.jpeg" style="width:80%; height:400px; margin-left:10%">
  <h3 align="center">We always provides you with the best! ( Terms & Conditions are applied) </h3>
  <br>
  <h1 align="center" style="color: red" >20% off from your bill for oreo products </h1>
  <img  src="../images/GiftCard/cl3.jpeg" style="width:80%; height:400px; margin-left:10%">
  <h3 align="center">Be a stylish lady ..Grab your cosmetics from oriflames</h3>
  <br>
  <h1 align="center" style="color: red" >30% off on commercial  visa cards </h1>
</div>
<div class="mySlides1" style="column-count: 3">
  <img  src="../images/GiftCard/cl4.jpeg" style="width:80%; height:400px; margin-left:10%">
  <h3 align="center">Here we offer you with healthy drinks..</h3>
  <br>
  <h1 align="center" style="color: red" >Bill above Rs.1000 and get a bundle of 6 packets free </h1>
  <img  src="../images/GiftCard/cl5.jpeg" style="width:80%; height:400px; margin-left:10%">
  <h3 align="center">Nice Clean and Tidy clothes for a Bright Personality..
Don't miss it!</h3>
  <br>
  <h1 align="center" style="color: red" >Get 4kg parcel and get a comfort 1 litre bottle free </h1>
  <img  src="../images/GiftCard/cl6.jpeg" style="width:80%; height:400px; margin-left:10%">
  <h3 align="center">Hey babys...ask your mom to by you KELLOGS!!!</h3>
  <br>
  <h1 align="center" style="color: red" >20% off from your kellogs bill </h1>
</div>
	<center>
  <button onclick="plusDivs(-1)">&#10094;</button>
  <button onclick="plusDivs(1)">&#10095;</button>
  </center>
</div>
<div><?php include '../html/footer.html';?></div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides1");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}

</script>
</body>
</html>