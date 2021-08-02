<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
    <title>Grocery Mart</title>
    <link rel="stylesheet" type="text/css" href="s.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<script>
    
function change1(det)
{

	var det=document.getElementById(det );
 if(det.value=="bronze gift card")
	{
	document.getElementById("card1").innerHTML="BRONZE Gift Card";
	document.getElementById("price1").innerHTML="Rs.1500.00";
	document.getElementById("para").innerHTML="Gift your loved ones with the best! Gift card expires from 3 months after issued date";
	document.getElementById("change").src="../images/GiftCard/G1.jpg";										
	}

else if(det.value=="silver gift card")
	{
	document.getElementById("card1").innerHTML="SILVER Gift Card";
	document.getElementById("price1").innerHTML="Rs.2500.00";
	document.getElementById("para").innerHTML="Gift your loved ones with the best! You may enjoy special offers for oriflame products while shopping from the gift card.Gift card expires from 3 months after issued date";
	document.getElementById("change").src="../images/GiftCard/G2s.jpg";										
	}


else if(det.value=="golden gift card")
	{
	document.getElementById("card1").innerHTML="GOLDEN Gift Card";
	document.getElementById("price1").innerHTML="Rs.5000.00";
	document.getElementById("para").innerHTML="Gift your loved ones with the best ! You may enjoy special offers for kellogs and unilever products while shopping from the gift card.Gift card expires from 3 months after issued date";
	document.getElementById("change").src="../images/GiftCard/G3g.jpg";										
	}

}
    </script>
    <style>
	.same1
{

height:800px;
width:30%;
border: 5px solid black;
float:left;
margin:10px;
background-color: gray;
margin-top: 30px;


}

.img1
{
width: 300px;
height: 200px;
margin:1px;

}

.text1
{
color:#000099;
font-family: serif;


}

.text2
{
font-size: 16px;
color: #002266;
margin-left: 5px;

}

.option
{
width:80%;
height: 30px;
margin-left:5px;
}

.para
{
margin-left:5px;
font-size: 20px;
font-weight: bold;

}

.img2
{
margin-left: 70px;
width:300px;
height: 300px;

}

	</style>
</head>
<body>

<!--Load Header using PHP-->
    <div> <?php include 'header.php';?> <br> </div> <br>
    
    
	<h1 class="text1">Gift Card Details</h1>
	<div class="same1" style="margin-left:35px">
		<h3>BRONZE Gift Card</h3>
		<center>
		<img src="../images/GiftCard/G1.jpg" class="img1">
		</center>

		<h3>SILVER Gift Card</h3>
		<center>
		<img src="../images/GiftCard/G2s.jpg" class="img1">
		</center>

		<h3>GOLDERN Gift Card</h3>
		<center>
		<img src="../images/GiftCard/G3g.jpg" class="img1">
		</center>
	</div>


	<div class="same1">
		<h3 id="card1" name="card1">BRONZE Gift Card</h3>
		<p id="price1" name="price1">Rs.1500.00</p>

		<b><label class="text2">Type</label></b><br><br>
		<select class="option" id="sel" name="sel" onchange="change1(this.id)">
			<option value=""></option>
			<option id="op1" value="bronze gift card" >bronze gift card</option>
			<option id="op2" value="silver gift card" >silver gift card</option>
			<option id="op3" value="golden gift card" >golden gift card</option>
		</select>
		<br><br>
		<p id="para" name="para" class="para">Gift your loved ones with the best! Gift card expires from 3 months after issued date</p>
		<br>
		<br>
		<img src="../images/GiftCard/G1.jpg" class="img2" id="change">
	</div>

	<div class="same1" align="center">
	
<form action="submitgiftcard.php" method="post">
<h2 >Gift Card Purchasing Form</h2>
 
<div>
  <div ><i class="w3-xxlarge fa fa-user"></i></div>
    <div>
      <input name="first" type="text" placeholder="First Name">
    </div>
</div>

<div >
  <div style="width:40px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div >
      <input  name="last" type="text" placeholder="Last Name">
    </div>
</div>

<div >
  <div style="width:40px"><i class="w3-xxlarge fa fa-envelope"></i></div>
    <div >
      <input  name="email" type="text" placeholder="Email">
    </div>
</div>

<div >
  <div  style="width:40px"><i class="w3-xxlarge fa fa-phone"></i></div>
    <div >
      <input name="phone" type="text" placeholder="Phone">
    </div>
</div>

<div>
  <div style="width:40px"><i class="w3-xxlarge 	fa fa-newspaper"></i></div>
    <div >
      <select class="option" id="sel" name="sel" onchange="change1(this.id)">
			<option value=""></option>
			<option id="op1" value="bronze gift card" >bronze gift card</option>
			<option id="op2" value="silver gift card" >silver gift card</option>
			<option id="op3" value="golden gift card" >golden gift card</option>
		</select>
    </div>
</div>

<div>
  <div style="width:40px"><i class="w3-xxlarge fa fa-calendar"></i></div>
    <div >
      <input  name="date" type="date" placeholder="Date of issued">
    </div>
</div>

<div>
  <div style="width:40px"><i class="w3-xxlarge 	fa fa-address-card"></i></div>
    <div >
      <input  name="from" type="text" placeholder="Gifted From">
    </div>
</div>

<div>
  <div style="width:40px"><i class="w3-xxlarge 	fa fa-address-card"></i></div>
    <div >
      <input  name="to" type="text" placeholder="Gifted To">
    </div>
</div>
<p>
<button> Send </button>
</p>
</form>	

	</div>
<!--Load Footer using PHP-->
    <div ><?php include '../html/footer.html';?></div>


</body>
</html>