<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
    <link rel="stylesheet" href="css/styles.css">
  <title>Grocery Mart</title>
    
  

</head>
<body>
<div><?php include "header.php" ?></div>
<script>
{
  alert("page is loading");
}
</script>

<center><button onclick="location.href='loginvender.php'" ><i class='fas fa-user-alt'> If You Are Alreay a Member Go Here</i></button></center>

<div class="row">
  <div class="col3">
    <div class="container">
      <form  class="form-style-9" method="POST" action="submitvender.php">
      
        <div class="row">
          <div class="col2">
            <h3>Vendor Details</h3>
			<br>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe"required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="email" name="email" placeholder="john@example.com"required><br><br>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street"required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York"required>

            <div class="row">
              <div class="col2">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY"required>
              </div>
              <div class="col2">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001"required>
              </div>
            </div>
          </div>

          <div class="col2">
            <h3>Bank Details</h3>
          <br>
            <label for="business">Type of Business</label>
            <input type="text" id="business" name="business" placeholder="Business Type"required>		  
            <label for="bname">Bank Name</label>
            <input type="text" id="aname" name="Bankname" placeholder="Sampath Bank"required>
            <label for="anum">Account Number</label>
            <input type="text" id="anum" name="Accountnumber" placeholder="145*********"required>
            <label for="idnum">ID Number</label>
            <input type="text" id="idnum" name="IDnum" placeholder="1000254540V / 20000680154"required>
            <div class="row">
              <div class="col2">
                <label for="connum">Contact Number </label>
                <input type="text" id="connum" name="connum" placeholder="Phone Number"required>
              </div>
              
            </div>
          </div>
          
        </div>
	   <center>
        <input type="submit" value="Submit" class="btn" value="Add Payment Details">
       </center>
	  </form>
    </div>
  </div>
</div>


    <br><br>
<div><?php include "../html/footer.html" ?> </div>
    
</body>
</html>
