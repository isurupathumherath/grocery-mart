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



<?php

	require_once "config.php";
	include 'header.php';

	if(isset($_SESSION['username']) && !empty($_SESSION['username']) )
		{
			$un = $_SESSION['username'];
			
			$sql = "SELECT * FROM cart WHERE username = '$un'";
	
	echo "<br><h2 style='color: green;' align='center'> Your Cart </h2> ";
	if ($result=mysqli_query($link,$sql))
	  {
	  // Return the number of rows in result set
	  $rowcount=mysqli_num_rows($result);
	  echo  '<br> <p align="center">' . $rowcount . '   Items Are in Your Cart. <p><br>';
	  // Free result set
	  mysqli_free_result($result);
	  }
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			?>
			
			<div align="center">
			<table align="center" width="90%">

			<?php while($row = mysqli_fetch_array($result)){ 
				$bcode = $row['barcode'];
				$sql1 = "SELECT * FROM items WHERE barcode = $bcode";
				
				$sql2 = "SELECT name FROM images WHERE barcode = $bcode"; 
				$result2 = mysqli_query($link,$sql2); 
				$row2 = mysqli_fetch_array($result2);
				if(mysqli_num_rows($result2) > 0){ 
					$image2 = $row2['name']; 
					$image_src2 = "../admin/upload/".$image2;
					
				} else {
					echo "<center>NO PHOTO AVAILABLE</center>";
				}
			?>
			  
			
			   <?php.['$count'].?>
			
			
					
			<?php 
				if ($result1=mysqli_query($link,$sql1)){
				while($row1 = mysqli_fetch_array($result1)){ ?>
				<tr>
					<?php echo "<td> <img src='$image_src2' alt='item_image' style='width:250px;height:150px;'>.</td>"; ?>
					<?php echo "<td width='25%'><p style='font-size: 30px;'> Name: " . $row1['name'] . "</p></td>"; ?>
					<?php echo "<td width='20%'> <p> Price: " . $row1['unit_price'] . " </p></td>"; ?>
					<?php echo "<td width='20%'> <p> Stock Quantity: " . $row1['quantity'] . " </p></td>"; ?>
					<?php echo "<td width='10%' align='center'> <button class='button'>+ Add Order</button> <button class='button'>- Remove</button> </td>"; ?>
				</tr>
				
				<?php } 
			
				
					
				}
				else {
					echo "ERROR";
				}
			}
			}
			echo "</table> </div>";
			// Free result set
			mysqli_free_result($result);
		} else{
			echo "";
		}
	} else{
		echo "<h2 align='center'>Cart Is Empty!</h2>" . mysqli_error($link);
	}

	
	 
	// Close connection
	mysqli_close($link);
	
	include '../html/footer.html';
?>


</body>
</html>