<?php 
	include_once('connection.php');
	$id = $_GET['id'];
	$page = $_GET['page'];
	$query = "DELETE FROM users where id =". $id;
	$result = $conn->query($query);
	
	header("Location: index08.php?page=".$page);
?>
 