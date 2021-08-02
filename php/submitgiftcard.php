<?php
	include_once 'config.php';

	$fname = $_POST["first"];
	$lname = $_POST["last"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$sell = $_POST["sel"];
	$dates = $_POST["date"];
	$from = $_POST["from"];
	$to = $_POST["to"];
	
	
	$sql = "insert into giftcardorder (fname,lname,email,phone,card,date,fromm,too) values('$fname','$lname','$email','$phone','$sell','$dates','$from','$to')";
	if(mysqli_query($link,$sql)){
		echo "<script>alert ('Record inserted successfully!!')</script>";
		header ("Location:giftcarddetails.php");
	}
	else{
		echo "<script>alert ('Error in insert in records')</script>";
		header ("Location:giftcarddetails.php");
	}
	
	mysqli_close($link);
?>