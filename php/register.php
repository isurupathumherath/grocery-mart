<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$fullname = $address = $tp = $email = $bd = $username = $password = $confirm_password = "";
$fullname_err = $address_err = $tp_err = $email_err = $bd_err = $username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
	if(empty(trim($_POST["fullname"]))){
        $fullname_err = "Please enter the Full Name.";
	}
	if(empty(trim($_POST["address"]))){
        $address_err = "Please enter the Address.";
	}
	if(empty(trim($_POST["tp"]))){
        $tp_err = "Please enter the Telephone Number.";
	}
	if(empty(trim($_POST["email"]))){
        $email_err = "Please enter the Email Address.";
	}
	if(empty(trim($_POST["bd"]))){
        $bd_err = "Please enter the Birthday.";
	}
    // Validate username
	
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT user_id FROM users WHERE (username = ?) AND (u_type = 'customer')";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = trim($_POST["username"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This username is already taken.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Please confirm password.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Password did not match.";
        }
    }
    
    // Check input errors before inserting in database
    if(empty($fullname_err) && empty($address_err) &&  empty($tp_err) && empty($email_err) && empty($bd_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO users (username, password, fullname, address, tp, email, birthday, u_type) VALUES (?, ?, ?, ?, ?, ?, ?, 'customer')";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_password, $fname, $address, $tp, $email, $bd);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			$fname = trim($_POST["fullname"]);
			$address = trim($_POST["address"]);
			$tp = trim($_POST["tp"]);
			$email = trim($_POST["email"]);
			$bd = trim($_POST["bd"]);
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: logincus.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
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
	<script src="../js/script.js"></script>
	<link rel="stylesheet" href="../css/style.css">
    <style type="text/css">
		
        .register{
			width: 50%;
			margin-left: 30px;
			margin-top: 20px;
			padding: 30px 30px;
			width: 95%;
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
		input[type=date] {
			border: 2px solid green;
			width: 100%;
			height: 50px;
			font-size: 16px;
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
		#validateGM {
		  display:none;
		  background: #f1f1f1;
		  color: #000;
		  position: relative;
		  padding: 20px;
		  margin-top: 10px;
		}

		#validateGM p {
		  padding: 10px 35px;
		  font-size: 18px;
		}
		/* Add a green text color and a checkmark when the requirements are right */
		.valid {
		  color: green;
		}

		.valid:before {
		  position: relative;
		  left: -35px;
		  content: "✔";
		}

		/* Add a red text color and an "x" when the requirements are wrong */
		.invalid {
		  color: red;
		}

		.invalid:before {
		  position: relative;
		  left: -35px;
		  content: "✖";
		}
    </style>
</head>
<body>
	<div><?php include "header.php" ?></div>
    <div class="register">
        <h2 align="center">Sign Up</h2>
        <p align="center">Please fill this form to create an account.</p> <br>
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
		
			<div <?php echo (!empty($fullname_err)) ? 'has-error' : ''; ?>>
                <label>Full Name</label>
                <input type="text" name="fullname" value="<?php echo $fullname; ?>">
				<span style="color: red;"><b><?php echo $fullname_err; ?></b></span>
            </div><br>
			<div <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <span style="color: red;"><?php echo $username_err; ?></span>
            </div><br>  
			<div <?php echo (!empty($address_err)) ? 'has-error' : ''; ?>>
                <label>Address</label>
                <input type="text" name="address" value="<?php echo $address; ?>">
				<span style="color: red;"><?php echo $address_err; ?></span>
            </div><br>
			<div <?php echo (!empty($tp_err)) ? 'has-error' : ''; ?>>
                <label>Telephone Number</label>
                <input type="text" name="tp" value="<?php echo $tp; ?>">
				<span style="color: red;"><?php echo $tp_err; ?></span>
            </div><br>
			<div <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>>
                <label>Email Address</label>
                <input type="text" name="email" value="<?php echo $email; ?>">
				<span style="color: red;"><?php echo $email_err; ?></span>
            </div><br>
			<div <?php echo (!empty($bd_err)) ? 'has-error' : ''; ?>>
                <label>Birthday</label>
                <input type="date" name="bd" value="<?php echo $bd; ?>">
				<span style="color: red;"><?php echo $bd_err; ?></span>
            </div><br>
             <br>
            <div <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>>
                <label>Password</label>
                <input type="password" id="pswd" name="password" value="<?php echo $password; ?>">
				<input type="checkbox" onclick="GMshowPSWD()">Show Password
                <span style="color: red;"><?php echo $password_err; ?></span>
            </div>
			<br>
            <div <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>>
                <label>Confirm Password</label>
                <input type="password" id="cmpswd" name="confirm_password"value="<?php echo $confirm_password; ?>">
				<input type="checkbox" onclick="GMshowCMPSWD()">Show Password
                <span style="color: red;"><?php echo $confirm_password_err; ?></span>
            </div><br>
            <div><input type="submit" value="Submit"></div><br>
            <div><input type="reset" value="Reset"></div>
			 
			 <br>
        </form>
		<div id="validateGM">
		  <h3>Password must contain the following:</h3>
		  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
		  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
		  <p id="number" class="invalid">A <b>number</b></p>
		  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
		</div>
    </div>   
	<br>
	<div align="center"><button type="button" onclick="location.href='venderpackage.php'">Vender Register</button></div><br>	
	<div><?php include "../html/footer.html" ?> </div>
	<script>
	pswdValidateGm();
	
	function pswdValidateGm() {
		var myInput = document.getElementById("pswd");
		var letter = document.getElementById("letter");
		var capital = document.getElementById("capital");
		var number = document.getElementById("number");
		var length = document.getElementById("length");

		// When the user clicks on the password field, show the message box
		myInput.onfocus = function() {
		  document.getElementById("validateGM").style.display = "block";
		}

		// When the user clicks outside of the password field, hide the message box
		myInput.onblur = function() {
		  document.getElementById("validateGM").style.display = "none";
		}

		// When the user starts to type something inside the password field
		myInput.onkeyup = function() {
		  // Validate lowercase letters
		  var lowerCaseLetters = /[a-z]/g;
		  if(myInput.value.match(lowerCaseLetters)) {  
			letter.classList.remove("invalid");
			letter.classList.add("valid");
		  } else {
			letter.classList.remove("valid");
			letter.classList.add("invalid");
		  }
		  
		  // Validate capital letters
		  var upperCaseLetters = /[A-Z]/g;
		  if(myInput.value.match(upperCaseLetters)) {  
			capital.classList.remove("invalid");
			capital.classList.add("valid");
		  } else {
			capital.classList.remove("valid");
			capital.classList.add("invalid");
		  }

		  // Validate numbers
		  var numbers = /[0-9]/g;
		  if(myInput.value.match(numbers)) {  
			number.classList.remove("invalid");
			number.classList.add("valid");
		  } else {
			number.classList.remove("valid");
			number.classList.add("invalid");
		  }
		  
		  // Validate length
		  if(myInput.value.length >= 8) {
			length.classList.remove("invalid");
			length.classList.add("valid");
		  } else {
			length.classList.remove("valid");
			length.classList.add("invalid");
		  }
		}
	}
	</script>

</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->