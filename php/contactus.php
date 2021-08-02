<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$fullname = $email = $description = "";
$fullname_err = $email_err = $discription_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Validate Text Boxes
    if(empty(trim($_POST["fullname"]))){
        $fullname_err = "Please enter Full Name.";
	}
	if(empty(trim($_POST["email"]))){
        $email_err = "Please enter the Email Address.";
	}
	if(empty(trim($_POST["description"]))){
        $discription_err = "Please enter the Description.";
	}
    
    
    // Check input errors before inserting in database
    if(empty($fullname_err) && empty($email_err) && empty($discription_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO feedback (user_name, email, message) VALUES (?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ss", $par_name, $par_email, $par_msg);
            
            // Set parameters
            $par_name = $fullname;
            $par_email = $email;
            $par_msg = $description;
            
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: contactus.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../css/style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!--W3SCHOOL fONT AWSOME 5 ICONS-->
    <title>Contact Us | Grocery Mart Online</title>
    
    <style>

		
	/* Create three equal columns that floats next to each other */
	.column-contact {
	  float: left;
	  width: 33.33%;
	  padding: 10px;
	  height: 450px; 
	}
	/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
	@media (max-width: 600px) {
	  .column-contact {
		width: 100%;
		}
	}

	textarea {
			border: 2px solid green;
			width: 100%;
			height: 100px;
		}
	input[type=submit] {
		background-color: #4CAF50; /* Green */
		border: 2px solid green;
		width: 100%;
		height: 30px;
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
	<!--Load Header using PHP-->
	<div>
	<?php include "header.php" ?>
	</div>

    
	
	<h2 align="center"> Contact Us </h2> <br>
	
	<div>
		<div class="column-contact" style="background-color:#aaa;">
			<h3 align="center">Feedback</h3> <br>
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div <?php echo (!empty($fullname_err)) ? 'has-error' : ''; ?>>
					<label>Full Name</label>
					<input type="text" style="border: 2px solid green;" name="fullname" value="<?php echo $fullname; ?>">
					<span style="color: red; float: right;"><?php echo $fullname_err; ?></span>
				</div>
				<div <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>>
					<label>Email Address</label>
					<input type="text" style="border: 2px solid green;" name="email" value="<?php echo $email; ?>">
					<span style="color: red; float: right;"><?php echo $email_err; ?></span>
				</div>
				<div <?php echo (!empty($discription_err)) ? 'has-error' : ''; ?>>
					<label>Details</label>
					<textarea name="description" value="<?php echo $description; ?>"></textarea>
					<span style="color: red; float: right;"><?php echo $discription_err; ?></span>
				</div>
				<br>
				<div><input type="submit" value="Submit"></div><br>
				<div><input type="reset" value="Reset"></div>
			</form>
		</div>
		<div class="column-contact" style="background-color:#bbb;">
		<h3 align="center">Our Location</h3> <br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.689149520769!2d80.3373742142678!3d6.927710220255388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3a694ed70a513%3A0xc21f60a28fcfe8ed!2sDeraniyagala%20Bus%20Station!5e0!3m2!1sen!2slk!4v1601187748099!5m2!1sen!2slk" width="100%" height="90%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>		</div>
		<div class="column-contact" style="background-color:#aaa;">
			<h3 align="center">Contacts</h3> <br>

			<div>
				<div style="margin-top: 50px;">
					<div style="text-align:center;">
						<i class="fa fa-map-marker"><p><span><br>B/ 474, Mosque Road, Deraniyagala, Sri lanka</p></i>
					</div><br><br>

					<div style="text-align:center;">
						<i class="fa fa-phone"><p><br>+94 76 1714 844</p></i>
					</div><br><br>
					<div style="text-align:center;">
						<i class="fa fa-envelope"></i>
						<p><a href="https://mail.google.com/"><br>support@grocerymart.com</a></p>
					</div>
				</div>
			</div>
		</div>
`	</div>

	<!--Load Footer using PHP-->
    <div><?php include '../html/footer.html';?></div>
    
</body>
</html>

<!--Created by: Herath H.M.I.P(IT20125516) -->