<!DOCTYPE html>
<html>
<head>
	<title>Gift Card Page</title>
	<link rel="stylesheet" type="text/css" href="../css/01.css">
	<script type="text/javascript" src="../js/02.js"></script>

</head>
<body>
	<div><?php include "header.php" ?></div>
	<h1 class="text2">Featured Gift Cards</h1>
	<br>
	<div class="buttonDiv">
	<hr class="hr1">
	
		<center>
		
		<button class="btn" type="button" id="button1" onclick="loadGiftDetails('button1')">Gift Card 1</button>
		<button class="btn" type="button" id="button2" onclick="loadGiftDetails('button2')">Gift Card 2</button>
		<button class="btn" type="button" id="button3" onclick="loadGiftDetails('button3')">Gift Card 3</button>
		<button class="btn" type="button" id="button4" onclick="loadGiftDetails('button4')">Gift Card 4</button>
		<button class="btn" type="button" id="button5" onclick="loadGiftDetails('button5')">Gift Card 5</button>
		<button class="btn" type="button" id="button6" onclick="loadGiftDetails('button6')">Gift Card 6</button>
		<button class="btn" type="button" id="button7" onclick="loadGiftDetails('button7')">Gift Card 7</button>
		
		</center>
		<br>
		<hr class="hr1">
	</div>
		<br><br>
		<center>
			<img id="img1" src="../images/image/giftCard.jpg" width="350px" height="350px" >
			<br>
			<b><p id="para" class="para">Gift Card Details</p></b>
		</center>
		
	</div>
	<br><br>
	<div>
		<center><button class="btn" onclick="location.href='giftcarddetails.php'">Get A Gift Card</button></center>
	</div>
	<div><?php include "../html/footer.html" ?> </div>
</body>
</html>