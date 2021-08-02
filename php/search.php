<?php


//$search = trim($_POST["search"]);
//echo $search;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
	<script src="../js/script.js"> </script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <title>Search Items | Grocery Mart Online</title>
    
    <style>
	/* Create three equal columns that floats next to each other */
	.column-search {
	  float: left;
	  width: 33.33%;
	  padding: 10px;
	  height: 120px;
	  border: 1px solid green;
	}
	/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
	@media (max-width: 600px) {
	  .column-search {
		width: 100%;
		}
	}

	textarea {
			border: 2px solid green;
			width: 100%;
			height: 100px;
		}
	input[type=submit] {
		background-color: #4CAF50; /* Green */
		border: 2px solid green;
		width: 100%;
		height: 30px;
		}
	input[type=reset] {
		background-color: red;
		border: 2px solid green;
		width: 100%;
		height: 30px;
		}
		
	.GMrating > span:hover:before {
	   content: "\2605";
	   position: absolute;
	}

	.GMrating {
	  unicode-bidi: bidi-override;
	  direction: rtl;
	}
	.GMrating > span:hover:before,
	.GMrating > span:hover ~ span:before {
	   content: "\2605";
	   position: absolute;
	}

	.GMrating {
	  unicode-bidi: bidi-override;
	  direction: rtl;
	}
	.GMrating > span {
	  display: inline-block;
	  position: relative;
	  width: 1.1em;
	}
	.GMrating > span:hover:before,
	.GMrating > span:hover ~ span:before {
	   content: "\2605";
	}
	
	.GMitem-column {
			float: left;
			width: 25%;
			height: 200px;
			padding: 10px;
			margin-top: 60px;
		}
		
		.GMitem-card button{
			border: none;
			outline: 0;
			padding: 12px;
			color: white;
			background-color:  111, 252, 3;
			text-align: center;
			cursor: pointer;
			width: 100%;
			font-size: 18px;
		}
	
		
		.GMitem-card-inner button:hover {
			opacity: 0.7;
		}
		a {
			text-decoration: none;
			display: inline-block;
			padding: 8px 16px;
		}

		a:hover {
			background-color: #ddd;
			color: black;
		}

		.previousbtn {
			margin-top: 100px;
			background-color: 111, 252, 3;
			color: black;
		}
		.view {
			background-color: 111, 252, 3;
			}
		
    </style>

</head>
<body>
	<!--Load Header using PHP-->
    <div> <?php include 'header.php';?> <br> </div> <br>

<!--
	<div>
		<div class="column-search" style="background-color:#aaa;">
			<div class="GMslidecontainer" align="center">
			  <h3>Price Range</h3><br>
			  <input type="range" min="1" max="100" value="50" class="GMslider" id="GMrange">
			  
			</div>
		</div>
		
		<div class="column-search" style="background-color:#aaa;">
			<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
			  <input type="text" placeholder="Search.." name="search2">
			  <button type="submit" style="float: right;"><i class="fa fa-search">Seacrh</i></button>
			</form>
		</div>
		
		<div class="column-search" style="background-color:#aaa;">
			<div class="GMrating" align="center">
			<span style="font-size:50px">☆</span><span style="font-size:50px">☆</span><span style="font-size:50px">☆</span><span style="font-size:50px">☆</span><span style="font-size:50px">☆</span>
			</div>
		</div>
	</div>
-->
	<div> <?php include '../html/searchresult.html';?> <br> </div>
	<!--Load Footer using PHP-->
    <div><?php include '../html/footer.html';?></div>
    
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->