<?php 
	session_start();
	$hh = $_GET['ten'];
	unset($_SESSION['thongtin'][$hh]);
	// print_r($hh);
	header('Location: 2.php');
 ?>