<?php
	include_once 'config.php';

	$fname = $_POST["firstname"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$state = $_POST["state"];
	$zip = $_POST["zip"];
	$type_business = $_POST["business"];
	$bank_name = $_POST["Bankname"];
	$account_number = $_POST["Accountnumber"];
	$id_number = $_POST["IDnum"];
	$contact_number = $_POST["connum"];
	
	$sql = "insert into vender(	full_name,email,address,city,state,zip,type_business,bank_name,account_number,id_number,contact_number) values('$fname','$email','$address','$city','$state','$zip','$type_business','$bank_name','$account_number','$id_number','$contact_number')";
	
	if(mysqli_query($link,$sql)){
		echo "<script>alert ('Registered Successfully/n Please Wait for Manager Email!')</script>";
		header("refresh:1;url=logincus.php");
		
	}
	else{
		echo "<script>alert ('Error Registration, Please Try Again!')</script>";
		header("refresh:1;url= venderregister.php");
	}
	
	mysqli_close($link);
?>