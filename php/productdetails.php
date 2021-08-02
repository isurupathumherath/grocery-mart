<?php
		include 'header.php';
		require ('config.php');
			$barcd =  $_SESSION['brcd'];
			
			$sql = "SELECT name FROM images WHERE barcode=$barcd"; 
			$result = mysqli_query($link,$sql); 
			$row = mysqli_fetch_array($result);
			if(mysqli_num_rows($result) > 0){ 
				$image = $row['name']; 
				$image_src = "../admin/upload/".$image;
				
			} else {
				echo "<center>NO PHOTO AVAILABLE</center>";
			}
			?>
			
			<?php
				
				
				$sqlq = "SELECT * FROM items WHERE barcode=$barcd";
				$resultq= mysqli_query($link,$sqlq);
				$rowq = mysqli_fetch_array($resultq);
				if(mysqli_num_rows($resultq) > 0) {
					$name = $rowq['name'];
					$price = $rowq['unit_price'];
					$type = $rowq['item_type'];
					$des = $rowq['description'];
					$date = $rowq['added_at'];
					
				} else {
					echo "<center>NO DATA AVAILABLE</center>";
				}
?>
			  

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
    <title>Grocery Mart</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 box-sizing: border-box;
}


.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
.fa {
  font-size: 100px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}

h1{
 text-shadow: 2px 2px 5px red;
}
</style>
</head>
<body>
	<!--Load Header using PHP-->
	
	<marquee><b><h3><font color="#088A29">Please provide all required details to sell your product via our website..</font><h2></marquee>
	
	<table width="100%" style="margin-left: 20px;">
	<tr>
	<td width="35%">
	<div>
		<img src='<?php echo $image_src;?>' alt="item_image" style="width:450px;height:350px;">
	</div>
	</td>
	<td width="20%">
	<div>
		<h1><?php echo $name ; ?></h1> 
		<br><br>
		<p style="font-size: 30px;">Price: Rs. <?php echo $price ; ?> /=</p>
		<br><br>		
		<p style="font-size: 20px;">Type: <?php echo $type ; ?></p> 
		<br><br>		
		<p style="font-size: 10px;">Added Date: <?php echo $date ; ?></p> 
	</div>
	</td>
	<td width="20%">
		<p style="font-size: 30px;">More Details: </p>
		<br><br>
		<p style="font-size: 30px;"> <?php echo $price ; ?> </p>
	</td>
	<td width="20%">
		<p><button onclick="location.href='addtocart.php' <?php $_SESSION['check1'] = true; ?>"><i class='fas fa-shopping-cart'> ADD TO CART </i></button></p>
		<p><button onclick="location.href='buyitem.php'">Buy Now</button></p>
	</td>
	</tr>
	</table>

	
	<!--Load Footer using PHP-->
    <div><?php include '../html/footer.html';?></div>
</body>
</html> 
