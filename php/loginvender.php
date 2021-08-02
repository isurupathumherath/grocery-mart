<div><?php include "header.php" ?></div>
<?php
// Initialize the session
//session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["venderloggedin"]) && $_SESSION["venderloggedin"] === true){
  header("location: venderdashboard.php");
  exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT user_id, username, password FROM users WHERE (username = ?) AND (u_type = 'vendor')";
        
        if($stmp1 = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmp1, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmp1)){
                // Store result
                mysqli_stmt_store_result($stmp1);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmp1) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmp1, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmp1)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["venderloggedin"] = true;
                            $_SESSION["user_id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: venderdashboard.php");
                        } else{
                            // Display an error message if password is not valid
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else{
                    // Display an error message if username doesn't exist
                    $username_err = "No account found with that username.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmp1);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	
    <title>Vendor Login | Grocery Mart Online</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        body{ 
			font: 14px sans-serif; 
			}
        .Customer-login-form {
			margin-top: 100px;
			margin-left: 25%;
			width: 60%; 
			}
    </style>
</head>
<body>
	
    <div class="Customer-login-form" align="center" >
		
		<?php
		if(isset($_SESSION["logmsg"]) && $_SESSION["logmsg"] === false){
		  $err_msg =  htmlspecialchars($_SESSION["err_dis"]);
		  echo '<h3 style="color: red;">' . $err_msg . '</h3>';
		}
		?>
		
		
		<br> 
		
        <h2 align="center" style="font-size: 50px;">Vendor Login - Grocery Mart</h2><br>
        <p style="font-size: 20px;">Please fill in Vendor credentials to login.</p><br>
		
		<div class="GMform">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 20px;">Username</label><br>
                <input type="text" name="username" value="<?php echo $username; ?>" style="font-size: 20px;">
                <span><?php echo $username_err; ?></span>
            </div>    
			<br>
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label style="font-size: 20px;">Password</label><br>
                <input type="password" name="password" style="font-size: 20px;">
                <span><?php echo $password_err; ?></span>
            </div>
            
            <div style="margin-top: 20px"><input type="submit" value="Login"> <input style="margin-top: 10px"type="reset" value="Reset"></div>
            
        </form>
		</div>
    </div>   
	<div><?php include "../html/footer.html" ?> </div>
</body>
</html>

