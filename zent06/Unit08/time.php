<?php 
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	echo "<br>". date('y-m-d h-i-s') ;
	echo "<br>". date('Y-M-d H-i-s') ;
	echo "<br>". date('Y-M-D h-i-s') ;
	echo "<br>". date('Y-M-d H-i-s'), time() ;
	echo "<br>Kiểu chuẩn: ". date('Y-m-d H-i-s') ;
	
	echo "<br>". date('Y-M-d H-i-s'), 1500381867 ;
	// echo "<br>".  ;


	// mktime($gio, $phut, $giay, $thang, $ngay, $nam);

	$dateint = mktime(0,0,0, 07, (12+78), 2017);
	echo "<br>". date('d/m/y H-s-i', $dateint);
 ?>