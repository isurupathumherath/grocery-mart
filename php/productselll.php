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
.buttonclz {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */



</style>
</head>
<body>
<!--Load Header using PHP-->
    <div> <?php include 'header.php';?> <br> </div> <br>
	 <center><h1 style="background-color:MediumSeaGreen;">Product Selling</h1>
	<marquee><b><h3><font color="#088A29">Please provide all required details to sell your product via our website..</font><h2></marquee>
	<br><br><br>
	<form method="post" action="vendorsubmit.php">
     <label>First Name</label><br>
	 <input type="text" id="fname" name="fname" style="width:500px;" placeholder="Enter your first name here" required><br><br>
	 
	 Last Name<br>
	 <input type="text" id="lname" name="lname" style="width:500px;" placeholder="Enter your last name here" required><br><br>	
	 
	 
     Product Type</label><br>
	 <input type="text" id="type" name="type" style="width:500px;" placeholder="Enter your product here" required><br><br>
	 
	 Quantity</label><br>
	 <input type="text" id="qty" name="qty" style="width:500px;" placeholder="Enter your quantity here" required><br><br>
	 
	 Product Description<br>
	 <textarea id="des" name="des" rows="10" cols="50" style="width:500px;" required></textarea><br><br>

	Choose a Category<br>
	<br>
	<br>
	<select>
	<br>
		<option value="Choose a Category" name="cate">Choose a Category</option>
	    <option>Pulse</option> <option>Biscult</option> <option>Pasta</option> <option>Snacks</option> <option>Oil</option>	<option>Soup</option> <option>Meat</option>	 <option>Beer</option> <option>Nuts</option>
		</select><br><br>	
	<br>
	Price<br>
	<input type="text" id="price" name="price" style="width:500px;" placeholder="Price" required><br><br>
	<input type="submit" class="buttonclz button1"></input>
	<button type="reset" class="buttonclz button2">RESET</button>

	</form>
	</center><br><br>
	
		
	<!--Load Footer using PHP-->
    <div><?php include '../html/footer.html';?></div>
</body>
</html> 
