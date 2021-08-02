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

.GMbtn {
			border: none; 
			color: white; 
			padding: 14px 28px; 
			cursor: pointer; 
			background-color: #32786d;
		}

.btn:hover {opacity: 1}
</style>
</head>
<body>

<h1>Item Details</h1>

<?php

	require_once "config.php";

	$sql = "SELECT * FROM users";
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
						<th>User ID</th>
						<th>Username</th>
						<th>Full Name</th>
						<th>Address</th>
						<th>Telephone Number</th>
						<th>Email Address</th>
						<th>Birthday</th>
						<th>Created At</th>
					</tr>
			<?php while($row = mysqli_fetch_array($result)){ ?>
				<tr>
					<?php echo "<td>" . $row['user_id'] . "</td>"; ?>
					<?php echo "<td>" . $row['username'] . "</td>"; ?>
					<?php echo "<td>" . $row['fullname'] . "</td>"; ?>
					<?php echo "<td>" . $row['address'] . "</td>"; ?>
					<?php echo "<td>" . $row['tp'] . "</td>"; ?>
					<?php echo "<td>" . $row['email'] . "</td>"; ?>
					<?php echo "<td>" . $row['birthday'] . "</td>"; ?>
					<?php echo "<td>" . $row['created_at'] . "</td>"; ?>
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