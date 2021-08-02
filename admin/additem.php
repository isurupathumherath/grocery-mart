<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$barcode = $name = $type = $des = $rate = $unitp = $quantity = "";
$barcode_err = $name_err = $type_err = $des_err = $rate_err = $unitp_err = $quantity_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty(trim($_POST["barcode"]))){
        $barcode_err = "Please enter the Barcode of the Item.";
	}
	if(empty(trim($_POST["name"]))){
        $name_err = "Please enter the Item Name.";
	}
	if(empty(trim($_POST["type"]))){
        $type_err = "Please enter the Item Type.";
	}
	if(empty(trim($_POST["des"]))){
        $des_err = "Please enter the Description.";
	}
	if(empty(trim($_POST["rate"]))){
        $rate_err = "Please enter the normal rating.";
	}
	if(empty(trim($_POST["unitp"]))){
        $unitp_err = "Please enter the Unit Price.";
	}
	if(empty(trim($_POST["quantity"]))){
        $quantity_err = "Please enter the Quantity.";
	}
    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($type_err) &&  empty($des_err) && empty($rate_err) && empty($unitp_err) && empty($quantity_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO items (barcode, name, item_type, description, rating, unit_price, quantity) VALUES (?, ?, ?, ?, ?, ?, ?)";
			
        if($GMO = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($GMO, "sssssss", $par_barcode, $par_name, $par_type, $par_des, $par_rate, $par_price, $par_qua);
            
			// Set parameters
			
            $par_barcode = trim($_POST["barcode"]);
            $par_name = trim($_POST["name"]);
            $par_type = trim($_POST["type"]);
            $par_des = trim($_POST["des"]);
            $par_rate = trim($_POST["rate"]);
            $par_price = trim($_POST["unitp"]);
            $par_qua = trim($_POST["quantity"]);
			
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($GMO)){
                // Redirect to login page
                header("location:photoupload.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }	
        }
        // Close statement
        mysqli_stmt_close($GMO);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up | Grocery Mart Online</title>
	<link rel="stylesheet" href="../css/style.css">
    <style type="text/css">
		
        .register{
			width: 80%;
			margin-left: 150px;
			margin-top: 30px;
			margin-bottom: 30px;
			padding: 30px 30px;
			height: 100%;
			border: 1px solid blue;
			align: center;
		}
		input[type=text] {
			border: 2px solid green;
		}
		input[type=password] {
			border: 2px solid green;
		}
		input[type=submit] {
			background-color: #4CAF50; /* Green */
			border: 2px solid green;
			width: 100%;
			height: 50px;
		}
		input[type=reset] {
			background-color: red;
			border: 2px solid green;
			width: 100%;
			height: 30px;
		}
    </style>
</head>
<body>
    <div class="register">
        <h2 align="center">Add Item</h2>
        <p align="center">Please fill this form to create add item.</p> <br>
		<form action="" method="post">
			
			<div <?php echo (!empty($barcode_err)) ? 'has-error' : ''; ?>>
                <label>Barcode</label>
                <input type="text" name="barcode" value="<?php echo $barcode; ?>">
				<span style="color: red;"><b><?php echo $barcode_err; ?></b></span>
            </div><br>
			
			<div <?php echo (!empty($name_err)) ? 'has-error' : ''; ?>>
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>">
				<span style="color: red;"><b><?php echo $name_err; ?></b></span>
            </div><br>
			<div <?php echo (!empty($type_err)) ? 'has-error' : ''; ?>>
                <label>Category</label>
                <input type="text" name="type" value="<?php echo $type; ?>">
                <span style="color: red;"><?php echo $type_err; ?></span>
            </div><br>  
			<div <?php echo (!empty($des_err)) ? 'has-error' : ''; ?>>
                <label>Description</label>
                <input type="text" name="des" value="<?php echo $des; ?>">
				<span style="color: red;"><?php echo $des_err; ?></span>
            </div><br>
			<div <?php echo (!empty($rate_err)) ? 'has-error' : ''; ?>>
                <label>Normal Rating</label>
                <input type="text" name="rate" value="<?php echo $rate; ?>">
				<span style="color: red;"><?php echo $rate_err; ?></span>
            </div><br>
			<div <?php echo (!empty($unitp_err)) ? 'has-error' : ''; ?>>
                <label>Unit Price</label>
                <input type="text" name="unitp" value="<?php echo $unitp; ?>">
				<span style="color: red;"><?php echo $unitp_err; ?></span>
            </div><br>
			<div <?php echo (!empty($quantity_err)) ? 'has-error' : ''; ?>>
                <label>Quantity</label>
                <input type="text" name="quantity" value="<?php echo $quantity; ?>">
				<span style="color: red;"><?php echo $quantity_err; ?></span>
            </div><br>
			<div>
	
			<div>
            <div><input type="submit" value="Submit"></div><br>
            <div><input type="reset" value="Reset"></div>
			<br>
			 <br>
        </form>
    </div>  
</div>	
		<center><button onclick="location.href = 'welcome.php';"><span>Back</span></button></center>
	
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->