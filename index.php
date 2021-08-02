<?php

	/* Database credentials. Assuming you are running MySQL
	server with default setting (user 'root' with no password) */
	define('db', 'localhost');
	define('un', 'root');
	define('pswd', '');
	define('dnm', 'grocerymart');
	 
	/* Attempt to connect to MySQL database */
	$lk = mysqli_connect(db, un, pswd, dnm);
	 
	// Check connection
	if($lk === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}

	if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
		$ip = $_SERVER['HTTP_CLIENT_IP'];
	} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
		$ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
	} else {
		$ip = $_SERVER['REMOTE_ADDR'];
	}
	
	$sql = "INSERT INTO visiter (ip) VALUES ('$ip')";
				
			
	if ($lk->query($sql) === TRUE) {
		//Success Message
	} else {
		//Error Message
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--Reference : W3SCHOOL fONT AWSOME 5 ICONS-->
    <title>Home | Grocery Mart Online</title>
    

</head>
<body>
	<!--Load Header using PHP-->
    <div> <?php include 'html/header.html'; ?> <br> </div> <br>
	<!--Load Slide Show using PHP-->
	<div> <?php include 'html/slideshow.html'; ?> <br> </div>
	<!--Load Items using PHP-->
	<div> <?php include 'html/items.html'; ?> <br></div>

	<!--Load Footer using PHP-->
    <div><?php include 'html/footer.html';?></div>
    
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->