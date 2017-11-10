<?php 
	include_once('connection.php');
	if (isset($_POST['submit'])) {
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$gender = $_POST['gender'];
		$address = $_POST['address'];	

		$query = "INSERT INTO users(id,name,mobile,email,password,gender,address) values('','$name','$mobile', '$email', '$password', '$gender', '$address')";
		$result = $conn->query($query);

		// var_dump($result);
	}
	// echo $email;die;
	header('Location: index.php');

