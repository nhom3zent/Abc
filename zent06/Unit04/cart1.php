<?php 
	session_start();
	// session_destroy();die;
	$hang = array(
		array(
			"ID" => "SP1",
			"sp" => "IP4",
			"gia" => "1000",
		),
		array(
			"ID" => "SP2",
			"sp" => "IP5",
			"gia" => "2000",
		),
		array(
			"ID" => "SP3",
			"sp" => "IP6",
			"gia" => "3000",
		),
		array(
			"ID" => "SP4",
			"sp" => "IP7",
			"gia" => "4000",
		)
	);
	// session_destroy();die;
	foreach ($hang as $key => $value) {
		$mangmoi[$value['ID']] = $value;
	}

	$_SESSION['cart'] = $mangmoi;

	echo "<pre>";
	print_r($_SESSION);
 ?>