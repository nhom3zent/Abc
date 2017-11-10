<?php 
	session_start();
	$demo = array(
			'a' => "a",
			'e' => "as",
			'as' => "af",
		);
	$_SESSION['demo'] = $demo;
	echo "<pre>";
	print_r($_SESSION);
	echo "</pre>";
	setcookie("name","Kenny Huy",time() + 3600);
	//  echo "Ten cua ban la <b>" . $_COOKIE['name'];
	setcookie('msg', 'thành công', time() + 5);
	echo $_COOKIE['msg'];
 ?>