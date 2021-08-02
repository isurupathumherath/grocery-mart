<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

h1 {
  text-align: center;
  text-transform: uppercase;
  color: #4CAF50;
}
#st {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#st td, #st th {
  border: 2px solid #ddd;
  padding: 10px;
}

#st tr:nth-child(even){background-color: #f2f2f2;}

#st tr:hover {background-color: #ddd;}

#st th {
  width: 10%;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
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
</style>
</head>
<body>

<h1>Item Details</h1>

<?php

	require_once "config.php";

	if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
		{
			$uname = $_SESSION['username'];
			echo $uname;
			
			// Prepare an insert statement
			$sql2 = "SELECT * FROM cart WHERE username='$username'";
				
			
			if ($result=mysqli_query($link,$sql))
	  {
	  // Return the number of rows in result set
	  $rowcount=mysqli_num_rows($result);
	  printf(" %d items are in your Cart.\n",$rowcount);
	  // Free result set
	  mysqli_free_result($result);
	  }
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			?>
	<a href="searchitem.php"><center><button class="btn"><span>Search</span></button></center></a>
	<a href="welcome.php"><center><button class="btn"><span>Main Menu</span></button></center></a>
		   <?php.['$count'].?>
			<table border='3' id="st" align="center">
			
					<tr>
						<th>Item ID</th>
						<th>Barcode</th>
						<th>Name</th>
						<th>Item Type</th>
						<th>Description</th>
						<th>Rating</th>
						<th>Unit Price</th>
						<th>Stock Quantity</th>
						<th>Created At</th>
					</tr>
			<?php while($row = mysqli_fetch_array($result)){ ?>
				<tr>
					<?php echo "<td>" . $row['item_id'] . "</td>"; ?>
					<?php echo "<td>" . $row['barcode'] . "</td>"; ?>
					<?php echo "<td>" . $row['name'] . "</td>"; ?>
					<?php echo "<td>" . $row['item_type'] . "</td>"; ?>
					<?php echo "<td>" . $row['description'] . "</td>"; ?>
					<?php echo "<td>" . $row['rating'] . "</td>"; ?>
					<?php echo "<td>" . $row['unit_price'] . "</td>"; ?>
					<?php echo "<td>" . $row['quantity'] . "</td>"; ?>
					<?php echo "<td>" . $row['added_at'] . "</td>"; ?>
				</tr>
				<?php

			}
			echo "</table>";
			// Free result set
			mysqli_free_result($result);
		} else{
			echo "No records matching your query were found.";
		}
	} else{
		echo "ERROR: Could not able to execute. " . mysqli_error($link);
	}   

			
	}else{ 
			
		// Prepare an insert statement
		$sql2 = "SELECT * FROM guestcart WHERE username='$ip'";
				
			
		if ($result=mysqli_query($link,$sql))
		  {
		  // Return the number of rows in result set
		  $rowcount=mysqli_num_rows($result);
		  printf(" %d items are in stock.\n",$rowcount);
		  // Free result set
		  mysqli_free_result($result);
		  }
		if($result = mysqli_query($link, $sql)){
			if(mysqli_num_rows($result) > 0){
				?>
		<a href="searchitem.php"><center><button class="btn"><span>Search</span></button></center></a>
		<a href="welcome.php"><center><button class="btn"><span>Main Menu</span></button></center></a>
			   <?php.['$count'].?>
				<table border='3' id="st" align="center">
				
						<tr>
							<th>Item ID</th>
							<th>Barcode</th>
							<th>Name</th>
							<th>Item Type</th>
							<th>Description</th>
							<th>Rating</th>
							<th>Unit Price</th>
							<th>Stock Quantity</th>
							<th>Created At</th>
						</tr>
				<?php while($row = mysqli_fetch_array($result)){ ?>
					<tr>
						<?php echo "<td>" . $row['item_id'] . "</td>"; ?>
						<?php echo "<td>" . $row['barcode'] . "</td>"; ?>
						<?php echo "<td>" . $row['name'] . "</td>"; ?>
						<?php echo "<td>" . $row['item_type'] . "</td>"; ?>
						<?php echo "<td>" . $row['description'] . "</td>"; ?>
						<?php echo "<td>" . $row['rating'] . "</td>"; ?>
						<?php echo "<td>" . $row['unit_price'] . "</td>"; ?>
						<?php echo "<td>" . $row['quantity'] . "</td>"; ?>
						<?php echo "<td>" . $row['added_at'] . "</td>"; ?>
					</tr>
					<?php

				}
				echo "</table>";
				// Free result set
				mysqli_free_result($result);
			} else{
				echo "No records matching your query were found.";
			}
		} else{
			echo "ERROR: Could not able to execute. " . mysqli_error($link);
		}
	 
	} 
	
	// Close connection
	mysqli_close($link);
	
?>


</body>
</html>