<?php
	// echo "GET METHOD IN PHP";
	// echo "<br> Xin chào ".$_GET['name'];

	// echo "<br> Xin chào ".$_GET['full_name'];

	// if (isset($_GET['class'])) {		
	// echo "<br> Lớp ".$_GET['class'];
	// }


	// echo "<pre>";
	// print_r($_GET);
	// echo "</pre>";

	$user = $_GET['user'];
	$pwd = $_GET['pwd'];

	echo "<br>Tên đăng nhập: ". $user;
	echo "<br>Mật khẩu: " .$pwd;

	if ($user == "admin" && $pwd =='123') {
		echo "Xin chào admin";
	}else{
		echo "Đăng nhập thất bại.";
	}





