<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$barcode = "";
$barcode_err = "";
		
	if (isset($_POST['barcode'])) {
		$barcode = $_POST['barcode'];
		//SQL query for deletion.
		$sql = "DELETE FROM items WHERE barcode=$barcode";
		$sql1 = "DELETE FROM images WHERE barcode=$barcode";
		$sql2 = "DELETE FROM cart WHERE barcode=$barcode";
		$sql3 = "DELETE FROM guestcart WHERE barcode=$barcode";
		
		if (mysqli_query($link, $sql) && (mysqli_query($link, $sql1)) && (mysqli_query($link, $sql2)) && (mysqli_query($link, $sql3))) {
		  echo "<h3 align = 'center' style='color: red;'>Record deleted successfully</h3>";
		} else {
		  echo "<h3 align = 'center' style='color: red; align: center;'>Item is not deleted</h3>";;
		}
	}
    
    // Close connection
    mysqli_close($link);

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | Grocery Mart Online</title>
	<script src="../js/script.js"></script>
	<link rel="stylesheet" href="../css/style.css">
    <style type="text/css">
		
        .register{
			width: 80%;
			margin-left: 150px;
			margin-top: 30px;
			margin-bottom: 30px;
			padding: 30px 30px;
			height: 50%;
			border: 1px solid blue;
			align: center;
		}
		input[type=text] {
			border: 2px solid green;
		}
		input[type=password] {
			border: 2px solid green;
		}
		input[type=submit] {
			background-color: #4CAF50; /* Green */
			border: 2px solid green;
			width: 100%;
			height: 50px;
		}
		input[type=reset] {
			background-color: red;
			border: 2px solid green;
			width: 100%;
			height: 30px;
		}
		.GMbtn {
			border: none; 
			color: white; 
			padding: 14px 28px; 
			cursor: pointer; 
			background-color: #32786d;
		}
    </style>
</head>
<body>
    <div class="register">
        <h2 align="center">Add Item</h2>
        <p align="center">Please fill this form to create add item.</p> <br>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
			
			<div <?php echo (!empty($barcode_err)) ? 'has-error' : ''; ?>>
                <label>Barcode</label>
                <input type="text" name="barcode" value="<?php echo $barcode; ?>" id="barcode">
				<span style="color: red;"><b><?php echo $barcode_err; ?></b></span>
            </div><br>
			
			<div>
            <div><input type="submit" value="Delete"></div><br>
            <div><input type="reset" value="Reset"></div>
			<br>
			 <br>
			 
			
			
        </form>
    </div>  
</div>	
<br>
		<center><button class="GMbtn" onclick="location.href = 'welcome.php';"><span>Back</span></button></center>
	
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->