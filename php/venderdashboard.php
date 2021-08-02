<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["venderloggedin"]) || $_SESSION["venderloggedin"] !== true){
    header("location: loginvender.php");
    exit;
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - VENDOR | Grocery Mart Online</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
		.MGnavbar {
			overflow: hidden;
			background-color: #333;
			position: relative;
			top: 0;
			width: 100%;
		}
        body{ 
			font: 14px sans-serif; text-align: center; 
			margin:0;
		}

		.MGicon-bar {
			width: 300px;
			background-color: #555;
			
		}

		.MGicon-bar a {
			display: block;
			text-align: left;
			padding: 16px;
			transition: all 0.3s ease;
			color: white;
			font-size: 36px;
			
		}

		.MGicon-bar a:hover {
		    background-color: #000;
		}
		
		.GMbtn {
			border: none; 
			color: white; 
			padding: 14px 28px; 
			cursor: pointer; 
		}
		
		.adminh3 {
			font: 20px sans-serif; text-align: center; 
		}
		
		.reset {
			background-color: #4CAF50;
			}
		.reset:hover {
			background-color: #46a049;
			}
		.signout {
			background-color: #f44336;
			}
		.signout:hover {
			background-color: #da190b;
			}
		.view {
			background-color: #32786d;
			}
		td {
			width: 10%;
		}
    </style>
</head>
<body>

	
	<div class="MGnavbar">
	  <h1 style="color: white;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?><br></b> Welcome to VENDOR Dashboard.</h1>
	</div>

	<table width="90%">
	<tr>
	<td rowspan="5">
	<div class="MGicon-bar">
	  <a href="#"><i class="fa fa-plus-square"> Add Item</i></a>
	  <a href="#"><i class="fa fa-trash"> Delete Item</i></a>
	  <a href="#"><i class="fa fa-object-group"> Upload Photo</i></a> 
	  <a href="#"><i class="fa fa-bar-chart"> Item Details</i></a> 
	</div>
	</td>
	<td>
		<h3 class="adminh3">This Page Is Coming Soon For VENDORS</h3>
		
	</td>
	</tr>
	</table>
    <p>
	<button class="GMbtn signout" onclick="location.href='logout.php'">Sign Out of Your Account</button>
    </p>
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->