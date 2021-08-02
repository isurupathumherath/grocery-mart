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

<h1>Item Details</h1>

<?php

	require_once "config.php";

	$sql = "SELECT * FROM visiter";
	if ($result=mysqli_query($link,$sql))
	  {
	  // Free result set
	  mysqli_free_result($result);
	  }
	if($result = mysqli_query($link, $sql)){
		if(mysqli_num_rows($result) > 0){
			?>
			<table border='3' id="st" align="center">
			
					<tr>
						<th>Visiter ID</th>
						<th>IP Address</th>
						<th>Date & Time</th>
					</tr>
			<?php while($row = mysqli_fetch_array($result)){ ?>
				<tr>
					<?php echo "<td>" . $row['id'] . "</td>"; ?>
					<?php echo "<td>" . $row['ip'] . "</td>"; ?>
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
	 
	// Close connection
	mysqli_close($link);
?>
<br>
<center><button class="GMbtn" onclick="location.href = 'welcome.php';"><span>Back</span></button></center>

</body>
</html>
</html>
</html>
</html>