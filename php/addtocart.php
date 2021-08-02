<?php
// Include config file
require_once "config.php";

session_start();

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}


		$barcd =  $_SESSION['brcd'];

		if(isset($_SESSION['username']) && !empty($_SESSION['username']) )
		{
			$uname = $_SESSION['username'];
			echo $uname;
			
			// Prepare an insert statement
			$sql2 = "INSERT INTO cart (username, barcode) VALUES ('$uname', $barcd)";
				
			
			if ($link->query($sql2) === TRUE) {
				echo '<script> alert("Added to Cart Successfully"); </script>';
				header("refresh:1;url=../index.php");
			} else {
				echo '<script> alert("Error, You Already Added Item in to Your Cart!"); </script>';
				header("refresh:1;url=../index.php");  
			}				
		}else{ 
			
			// Prepare an insert statement
			$sql2 = "INSERT INTO guestcart (ip, barcode) VALUES ('$ip', $barcd)";
				
			
			if ($link->query($sql2) === TRUE) {
				echo '<script> alert("Added to Cart Successfully"); </script>';
				header("refresh:1;url=../index.php"); 
			} else {
				echo '<script> alert("Error, You Already Added Item in to Your Cart!"); </script>';
				header("refresh:1;url=../index.php"); 
			}
			
		} 
		
	
		
		
		
	
		
    // Close connection
    mysqli_close($link);
?>