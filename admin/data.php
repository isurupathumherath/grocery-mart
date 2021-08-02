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

$barcode=$_GET['barcode'];

$sql = "SELECT name FROM images WHERE barcode=$barcode"; 
$result = mysqli_query($link,$sql); 
$row = mysqli_fetch_array($result);
if(mysqli_num_rows($result) > 0){ 
	$image = $row['name']; 
	$image_src = "upload/".$image;
	
} else {
	echo "<center>NO PHOTO AVAILABLE</center>";
}



$sql = "SELECT * FROM items WHERE barcode=$barcode";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
		?>
		<center><img src='<?php echo $image_src;?>' width="200px" height="200px"></center>
		
		<?php while($row = mysqli_fetch_array($result)){ 
			$item_id = $row['item_id']; 
			$barcode = $row['barcode'];
			$name = $row['name'];
			$item_type = $row['item_type'];
			$des = $row['description'];
			$rate = $row['rating'];
			$price = $row['unit_price'];
			$quantity = $row['quantity'];
			$added = $row['added_at'];
		}
		?>
		<div align="center">
		<table id="st" border = "1">
			<tr><th colspan="2"><h1>Item Details</h1></th></tr>
			<br><br>
			<div style = "font-size: 30px">
			
			<tr><td><p>Item ID: </td><td><span color="green"><?php echo $item_id ; ?></span></p></td></tr>
			<tr><td><p>Barcode: </td><td><span color="green"><?php echo $barcode ; ?></span></p></td></tr>
			<tr><td><p>Name: </td><td><span color="green"><?php echo $name ; ?></span></p></td></tr>
			<tr><td><p>Type: </td><td><span color="green"><?php echo $item_type ; ?></span></p></td></tr>
			<tr><td><p>Description: </td><td><span color="green"><?php echo $des ; ?></span></p></td></tr>
			<tr><td><p>Rate: </td><td><span color="green"><?php echo $rate ; ?></span></p></td></tr>
			<tr><td><p>Price: </td><td><span color="green">Rs.<?php echo $price ; ?> /=</span></p></td></tr>
			<tr><td><p>Quantity: </td><td><span color="green"><?php echo $quantity ; ?></span></p></td></tr>
			<tr><td><p>Added At: </td><td><span color="green"><?php echo $added ; ?></span></p></td></tr>
		</table>
			</div>
		</div>
       


<?php
        
		
		
		
		
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

<a href="searchitem.php"><center><button class="btn"><span>Search Again</span></button></center></a>
<a href="itemdata.php"><center><button class="btn"><span>All Items</span></button></center></a>
<a href="welcome.php"><center><button class="btn"><span>Main Menu</span></button></center></a>

</body>
</html>