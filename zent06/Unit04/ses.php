<?php 
	session_start();
	$info = array(
		'ID' => '123',
		'NAME' => 'Zent',
		'PHONE' => '12345689'
		);

	$_SESSION['info'] = $info;

	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
?>