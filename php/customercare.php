<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
    <title>Grocery Mart</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
}

* {
  box-sizing: border-box;
}
.column {
  float: left;
  width: 33.33%;
  height: 800px; 
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

form.example::after {
  content: "";
  clear: both;
  display: table;
}
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  width:48%
}

.button1 {
	background-color: #4CAF50;
} 
.button2 {
	background-color: #008CBA;
}
.button3 {
	background-color: #FF9900 ;
} 
.button4 {
	background-color: #FFFF33;
}
 .line{
width: 30%;
height: auto;
border-bottom: 2px solid black;
border-right: 2px solid black;
border-left: 2px solid black;
border-top: 2px solid black;
position: absolute;
}
.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
<body>
<!--Load Header using PHP-->
    <div> <?php include 'header.php';?> <br> </div> <br>

<div class="row">
  <div class="column" >
  <center>
    <img src="../images/GiftCard/C1.jpg" alt="Foods" width="200"height="200">
	<h1>Custom Care</h1>
	<h2>Grocery Mart/h2>
    </center>
    <button class="button button1"><i class="w3-xxlarge fa fa-envelope"></i></button>
    <button class="button button2"><i class="w3-xxlarge fa fa-phone"></i></button>
    <button class="button button3"><i class="w3-xxlarge fa fa-commenting"></i></button>
    <button class="button button4"><i class="w3-xxlarge fa fa-question-circle"></i></button>
    <br><br><br>
    <button class="button button1">NOT INTERESTED</button>
	<button class="button button2">INTERESTED</button>
    </center>
  </div>
  <div class="column" >
   <div class="line" align="center">
   <img src="../images/GiftCard/logo1.jpg"  width="95"height="95">
   <img src="../images/GiftCard/logo1.jpg"  width="95"height="95">
   <img src="../images/GiftCard/logo1.jpg"  width="95"height="95">
   <img src="../images/GiftCard/logo1.jpg"  width="95"height="95">
   <br>
   <h4>
   <a href="#">User 1</a>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="#">User 2</a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="#">User 3</a>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="#">User 4</a>
   </h4>
   </div>
   <img src="../images/GiftCard/a1.jpg" style="margin-top: 30%"  width="90%" >

  </div>
  <div class="column" align="center" >
  <center>
  <form action="search.php" style="max-width: 70%" >
      <input type="text" placeholder="Search.." name="search">
      <button type="submit" style="width:50%"><i class="fa fa-search"></i></button>
    </form>
	</center>
    <h2>Question and Answers</h2>
            <div class="container">
          <img src="../images/GiftCard/saviyo.png" alt="Avatar" style="width:100%;">
          <p>How can I purchase a gift card?</p>
          <span class="time-right">11:00</span>
          </div>
        
        <div class="container darker">
          <img src="../images/GiftCard/C4.png" alt="Avatar" class="right" style="width:100%;">
          <p>Take a look at the gift card details page.</p>
          <span class="time-left">11:01</span>
        </div>
        
        <div class="container">
          <img src="../images/GiftCard/saviyo.png" alt="Avatar" style="width:100%;">
          <p>What are the monthly offers?</p>
          <span class="time-right">11:03</span>
          </div>
        
        <div class="container darker">
          <img src="../images/GiftCard/C4.png" alt="Avatar" class="right" style="width:100%;">
          <p>Offers are available in advertising page.</p>
          <span class="time-left">11:04</span>
        </div>
        
        <div class="container">
          <img src="../images/GiftCard/saviyo.png" alt="Avatar" style="width:100%;">
          <p>Any hot line to contact?</p>
          <span class="time-right">11:05</span>
        </div>
        
        <div class="container darker">
          <img src="../images/GiftCard/C4.png" alt="Avatar" class="right" style="width:100%;">
          <p>Visit Home oage or customer care page</p>
          <span class="time-left">11:06</span>
        </div>
          </div>
        </div>

	<!--Load Footer using PHP-->
    <div><?php include '../html/footer.html';?></div>
</body>
</html> 
