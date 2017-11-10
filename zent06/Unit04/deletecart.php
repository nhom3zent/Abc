<?php 
	session_start();
	$a = $_GET['id'];
	echo $a;
	unset($_SESSION['giohang'][$a]);
	header("Location:viewcart.php");
 ?>