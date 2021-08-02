<?php
	echo $search = $username = $password = "";
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
    <link rel="stylesheet" href="./css/style.css">
    <style>
        .log{
        margin-left: 100px;
        }

        .cart{
            margin-left: 30px;
        }
		body {
			background-image: url("./images/site/bg.png");
			background-color: #cccccc;
			background-size: cover;
		}
	
    </style>
</head>
<body>

<!--Top Header-->
<div class="GMheader">
    <a href="../index.php" class="GMnoHover"><img src="../images/site/logo.png" class="GMlogo-img" alt="logo"></a>
    <div class="GMheader-left">
        <a href="customercare.php">Customer Care</a>
        <a href="todayoffer.php">Today's Offers</a>
        <a href="advertisment.php">Advertise</a>
        <a href="venderregister.php">Sell Product</a>
        <a href="track.php">Track Order</a>
        <a href="giftcard.php">Gift Card</a>
        <a href="contactus.php">Contact Us</a>
		
		<?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
		{
		?>
			<div style = "float: right;">
				<p style="color: white;">Hi, <b><?php echo ($_SESSION["username"]); ?><br></b> Welcome to Grocery Mart Online.</p><br>
				<div align = "center">
					<table border="0">
					<tr>
					<td><button  onclick="location.href='profile.php'" ><i class='fas fa-user-alt'> Your Profile</i></button></td>
					<td><div align="center"><button style="background-color: red" onclick="location.href='logout.php'" > Log Out</button></div></td>
					</tr>
					</table>
				</div>
			
		</div>
		<?php }else{ ?>
			<button class="log" onclick="document.getElementById('id01').style.display='block'" width="20%"><i class='fas fa-user-alt'> Log In</i></button>
			<button  onclick="location.href='register.php'" ><i class='fas fa-user-alt'> Register</i></button>
		<?php } ?>
		
        <br>  
    </div>
    <div><br></div>
    <div class="GMheader-left">
        <div>
        <center>
        <form class="GMsearch" action="search.php" method="post">
            <input type="text" placeholder="Search.." name="search" class="GMsearchInput" value="<?php echo $search; ?>">
            <button type="submit"><i>Search</i></button>
        </form>
        </center>
        </div >
        <br>
        <div class="GMheader1">
            <div class="GMheader-left">
                <div class="GMheader-left">
                <a href="#CC">Pulse</a>
                <a href="#TO">Biscuits</a>
                <a href="#AD">Pasta & Noodles</a>
                <a href="#SP">Snacks</a>
                <a href="#TO">Oils/Fats</a>
                <a href="#GC">Soup</a>
                <a href="#MT">Meat</a>
                <a href="#MT">Beer</a>
                <a href="#MT">Nuts</a>
                <a href="../index.php">All Categories</a>
            </div>
        </div>   
        <a href="viewcart.php" class="cart"><i class='fas fa-shopping-cart'> CART</i></a>  
    </div>
    <br>
	
<!--Login Form-->	
<div id="id01" class="GMmodal">
  
  <form class="GMmodal-content GManimate" action="checkuser.php" method="post">
    <div class="GMimgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="GMclose" title="Close Modal">&times;</span>
    </div>

    <div class="GMform">
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" value="<?php echo $username; ?>" required>

      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" value="<?php echo $password; ?>" required>
        
      <button type="submit">Login</button>
      <label>
		<button type="button" onclick="document.getElementById('id01').style.display='none'" class="GMcancelbtn">Cancel</button>
      </label>
	  <br>
	  <button type="button"onclick="location.href='logincus.php'">LogIn Page</button>
    </div>

    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
</div>
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->