<?php 
	session_start();
	$id = $_GET['code'];
	unset($_SESSION['thongtin42'][$id]);
	header('Location:list4_2.php')
 ?>

