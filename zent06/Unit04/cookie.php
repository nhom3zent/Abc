<?php 
	// xet cookie
	setcookie('msg', ' Đăng nhập thành công', time() + 3 );

	echo "<pre>";
	print_r($_COOKIE);
	echo "</pre>";

	//hủy cookie
	// setcookie('msg', ' Đăng nhập thành công', time() - 60 );
	

 ?>