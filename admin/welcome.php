<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["adminloggedin"]) || $_SESSION["adminloggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "config.php";

	//Get item data
	$sql = "SELECT * FROM items";
	if ($result=mysqli_query($link,$sql))
	  {
	  // Free result set
	  mysqli_free_result($result);
	  }
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			// Return the number of rows in result set
			$itemcount=mysqli_num_rows($result);
			
			// Free result set
			mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute. " . mysqli_error($link);
	}
	
	//Get User data
	$sql = "SELECT * FROM users";
	if ($result=mysqli_query($link,$sql))
	  {
	  // Free result set
	  mysqli_free_result($result);
	  }
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			// Return the number of rows in result set
			$usercount=mysqli_num_rows($result);
			
			// Free result set
			mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute. " . mysqli_error($link);
	}
	
	//Get visiter Data
	$sql = "SELECT * FROM visiter";
	if ($result=mysqli_query($link,$sql))
	  {
	  // Free result set
	  mysqli_free_result($result);
	  }
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			// Return the number of rows in result set
			$visitcount=mysqli_num_rows($result);
			
			// Free result set
			mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute. " . mysqli_error($link);
	}
	 
	// Close connection
	mysqli_close($link);
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Admin | Grocery Mart Online</title>
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
			text-align: center;
			width: 25%;
		}
    </style>
</head>
<body>

	
	<div class="MGnavbar">
	  <h1 style="color: white;">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?><br></b> Welcome to ADMIN Dashboard.</h1>
	</div>

	<table width="90%">
	<tr>
	<td rowspan="5">
	<div class="MGicon-bar">
	  <a href="additem.php"><i class="fa fa-plus-square"> Add Item</i></a>
	  <a href="deleteitem.php"><i class="fa fa-trash"> Delete Item</i></a> 
	  <a href="photoupload.php"><i class="fa fa-object-group"> Upload Photo</i></a> 
	  <a href="itemdata.php"><i class="fa fa-bar-chart"> Item Details</i></a> 
	  <a href="register.php"><i class="	fa fa-drivers-license"> Add New Admin Account</i></a> 
	  <a href="venderregister.php"><i class="	fa fa-drivers-license"> Add New Vendor Account</i></a> 
	</div>
	</td>
	<td>
		<h3 class="adminh3">ITEM COUNT</h3>
		<p> <?php echo $itemcount ?> </p>
		<button class="GMbtn view" onclick="location.href='itemdata.php'">View Data</button>
		
		
	</td>
	<td>
		<h3 class="adminh3">USER COUNT</h3>
		<p> <?php echo $usercount ?> </p>
		<button class="GMbtn view" onclick="location.href='userdata.php'">View Data</button>
		
	</td>
	<td>
		<h3 class="adminh3">VISITOR COUNT</h3>
		<p> <?php echo $visitcount ?> </p>
		<button class="GMbtn view" onclick="location.href='visitoerdata.php'">View Data</button>
		
	</td>
	</tr>
	</table>
    <p>
	<button class="GMbtn reset" onclick="location.href='reset-password.php'">Reset Your Password</button>
	<button class="GMbtn signout" onclick="location.href='logout.php'">Sign Out of Your Account</button>
    </p>
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->