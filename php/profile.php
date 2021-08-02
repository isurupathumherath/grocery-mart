<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

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
#st {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

#st td, #st th {
  border: 2px solid #ddd;
  padding: 10px;
}

#st tr:nth-child(even){background-color: #f2f2f2;}

#st tr:hover {background-color: #ddd;}

#st th {
  width: 20%;
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>


<?php
include("config.php");
include ("header.php");

$uname = $_SESSION['username'];

$sql = "SELECT * FROM users WHERE username='$uname'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		
		while($row = mysqli_fetch_array($result)){ 
			$username = $row['username'];			
			$fname = $row['fullname'];
			$address = $row['address'];
			$tp = $row['tp'];
			$email = $row['email'];
			$birthday = $row['birthday'];
			$join_date = $row['created_at'];
		}
		?>
		
		
		<div align="center">
		<table id="st" border = "0">
			<tr><th colspan="2"><h1>Your Account Details</h1></th></tr>
			<br><br>
			<div style = "font-size: 30px">
			
			<tr><td><p>Username: </td><td><span color="green"><?php echo $username ; ?></span></p></td></tr>
			<tr><td><p>Full Name: </td><td><span color="green"><?php echo $fname ; ?></span></p></td></tr>
			<tr><td><p>Address: </td><td><span color="green"><?php echo $address ; ?></span></p></td></tr>
			<tr><td><p>Telephone Number: </td><td><span color="green"><?php echo $tp ; ?></span></p></td></tr>
			<tr><td><p>Email Address: </td><td><span color="green"><?php echo $email ; ?></span></p></td></tr>
			<tr><td><p>Birthday: </td><td><span color="green"><?php echo $birthday ; ?></span></p></td></tr>
			<tr><td><p>Registered At: </td><td><span color="green"><?php echo $join_date ; ?></span></p></td></tr>
		</table>
			</div>
		</div>
		
       


<?php
        
		
		
		
		
        // Free result set
        mysqli_free_result($result);
    } else{

        echo "No User Records Were Found.";
    }
} else{
    echo "ERROR: Could not able to execute. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<div><?php include "../html/footer.html" ?></div>


</body>
</html>