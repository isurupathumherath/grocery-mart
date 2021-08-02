<?php $barcode = "" ?>

<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
h1 {
  font-family: Lucida Console;
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}
.btn {
  background-color: #f4511e;
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  font-size: 16px;
  margin: 4px 2px;
  opacity: 0.6;
  transition: 0.3s;
}

.btn:hover {opacity: 1}

input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;
}

.info {background-color: #2196F3;} /* Blue */
.info:hover {background: #0b7dda;}


</style>
</head>
<body>
	<h1> ITEM SEARCH  </h1>
	<!-- [SEARCH FORM] -->
	<form method="GET" action="data.php" align="center">
		<h3>Barcode </h3>
		<input type="text" name="barcode" value="<?php echo $barcode; ?>">
		<button class="btn info" type="submit">SEARCH</button>
	</form><br><br><br><br>

	<a href="itemdata.php"><center><button class="btn"><span>All ITEMS</span></button></center></a>
	<a href="welcome.php"><center><button class="btn"><span>Main Menu</span></button></center></a>


</body>
</html>