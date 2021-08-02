<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate username
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM admins WHERE username = ?";
        
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
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO admins (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // Set parameters
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
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
    <title>Admin Register | Grocery Mart Online</title>
    <link rel="stylesheet" href="../css/style.css">
	<script src="../js/script.js"></script>
	<style>
        body{ font: 14px sans-serif; }
        .admin-register-form {
			margin-top: 100px;
			margin-left: 25%;
			width: 50%; 
			}
    </style>
</head>
<body>
    <div class="admin-register-form">
        <h2 align="center" style="font-size: 40px;">Admin Register - Grocery Mart</h2>
        <p style="font-size: 20px; text-align: center;">Please fill this form to create an account.</p>
		
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 20px;">Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" style="font-size: 20px;">
                <span><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 20px;">Password</label>
                <input id="pswd" type="password" name="password" class="form-control" value="<?php echo $password; ?>" style="font-size: 20px;">
				<input type="checkbox" onclick="GMshowPSWD()">Show Password <br>
                <span><?php echo $password_err; ?></span> <br>
            </div>

            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 20px;">Confirm Password</label>
                <input id="cmpswd" type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>" style="font-size: 20px;">
                <input type="checkbox" onclick="GMshowCMPSWD()">Show Password <br>
				<span class="help-block"><?php echo $confirm_password_err; ?></span> <br>
            </div>
            <div class="form-group">
                <input type="submit" value="Submit">
                <input type="reset" value="Reset">
            </div>
			
        </form>
		<?php if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
		{
		?>
		<?php }else{ ?>
		<br><br>
			<div align="center"><button  onclick="location.href='welcome.php'"><i class='fas fa-user-alt'> Back </i></button></div>
		<?php } ?>
    </div>  
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->