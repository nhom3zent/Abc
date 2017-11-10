<?php 
	include_once('connection.php');
	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$gender = $_POST['gender'];
		$address = $_POST['address'];	

		$query = "UPDATE users SET name='$name', mobile='$mobile', email='$email', password='$password', gender='$gender', address='$address' where id = '$id'";
		$result = $conn->query($query);

		// var_dump($result);die;
	}
	header('Location: index.php');
?>
