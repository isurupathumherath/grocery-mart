<?php
	include_once 'config.php';

	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$product = $_POST["type"];
	$quantity = $_POST["qty"];
	$description = $_POST["des"];
	$category = $_POST["cate"];
	$price = $_POST["price"];
	
	$sql = "insert into details(First_Name,Last_Name,Product_Type,Quantity,Product_Description,Choose_a_Category,Price) values('$fname','$lname','$product','$quantity','$description','	$category','$price')";
	
	if(mysqli_query($link,$sql)){
		echo "<script>alert ('Record inserted successfully!!')</script>";
		//header("Location:productselll.php");
	}
	else{
		echo "<script>alert ('Error in insert in records')</script>";
	}
	
	mysqli_close($link);
?>