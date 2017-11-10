<?php
	// if (4%2 == 0) {
	// 	echo "True";
	// }
	// echo "<br>";
	// $i=1;
	// if ($i%2==0) {
	// 	echo "Số chẵn";
	// }else if ($i%2!=0){
	// 	echo "Số lẻ";
	// } else {
	// 	echo "Không phải là số...";
	// }
	// echo "<br>";
	// $i=1;
	// if ($i>0) {
	// 	echo "Số dương";
	// }else if ($i%2<0){
	// 	echo "Số âm";
	// } else {
	// 	echo "Số không";
	// }

	// echo "<br>";

	// switch ($i) {
	// 	case 1:
	// 		echo "Thứ 2";
	// 		break;
	// 	case 2:
	// 		echo "Thứ 3";
	// 		break;
	// 	case 3:
	// 		echo "Thứ 4";
	// 		break;
	// 	case 4:
	// 		echo "Thứ 5";
	// 		break;
	// 	case 5:
	// 		echo "Thứ 6";
	// 		break;
	// 	case 6:
	// 		echo "Thứ 7";
	// 		break;
	// 	default:
	// 		echo "Chủ Nhật";
	// 		break;
	// }

	// echo "<br>";

	// for ($i=0; $i < 6; $i++) { 
	// 	echo $i . "<br>";
	// }


	// echo "<br>";
	// $j=0;
	// while ($j < 10) {
	// 	echo "đây là số " . $j . "<br>";
	// 	$j++;		
	// }


	// echo "<br>";

	// $i=0;
	// do {
	// 	echo "đây là số " . $i . "<br>";
	// 	$i++;
	// } while ( $i < 10);


	// echo "<br>";

	// $a = [1,2,"Quang",'Ta',8, True];
	// foreach ($a as  $value) {
	// 	echo $value . "<br>";		
	// }
	// echo $a[2];


	// echo "<br>";

	// $a = [1,2,"Quang",'Ta',8, True];
	// foreach ($a as $key => $a1) {
	// 	if ($key == 2) {
	// 		echo $a1;
	// 	}
	// }

	// $users = [
	// 	1 => [
	// 		'name' => 'Quang',
	// 		'abc' => 'xyz',
	// 	],
	// 	2 => [
	// 		'name' => 'Quang',
	// 		'abc' => 'xyzzzz',
	// 	],
	// 	3 => [
	// 		'name' => 'Quang',
	// 		'abc' => 'xyzxxxx',
	// 	]
	// ];
	// // echo "<pre>";
	// // var_dump($users);

	// foreach ($users as $key => $user) {
	// 	foreach ($user as $key1 => $value) {
	// 		echo $value;
	// 	}
	// }

	// foreach ($users as $key => $value) {
	// 	echo $value['name'] . " " . $value['abc'];
	// }


	// echo "<br>";
	// echo "<br>";
	// echo "<br>";
	// $users = [
	// 	1 => [ 'Quảng' , '21316546'],
	// 	2 => [ 'Quảng1' , '21316546321'],
	// 	3 => [ 'Quảng2' , '21316546212121']
	// ];
	// foreach ($users as $key => $value) {
	// 	if ($key>2) {
	// 		break;
	// 	}else {
	// 		echo $value[0] . " " . $value[1] . "<br>";
	// 	}
	// };



	// echo "<br>";
	// echo "<br>";
	// echo "<br>";

	// for ($i=0; $i < 10 ; $i++) { 
	// 	if ($i==3) {
	// 		continue;
	// 	}
	// 	echo $i . "<br>";
	// }
	// $i=2;
	// if (isset($i)) {
	// 	echo "$i tồn tại";
	// }else {
	// 	echo "$i không tồn tại";
	// }
	
	// $i=2;
	// if (empty($i)) {
	// 	echo "$i tồn tại";
	// }else {
	// 	echo "$i không tồn tại";
	// }
	
	// output ('Hello Zent');
	// function output($name){
	// 	echo "Quảng " . $name;
	// }

	// $i = 4;
	// $j = 8;
	// echo $i*$j;
	// function sum($a, $b){
	// 	$j = 2;
	// 	return $a + $b +$GLOBALS['i'] + $j;
	// }
	// echo sum(3, '4') . 6 . $j;
	
	
	for ($i=32; $i <= 126; $i++) { 
		echo chr($i) . " ";
	}
	echo "<br>";
	$i=32;
	while ( $i<= 126) {
		echo chr($i) . " ";	
		$i++;
	}
	echo "<br>";
	$i = 32;
	do {
		echo chr($i) . " ";
		$i++;
	}while($i<127)
?>