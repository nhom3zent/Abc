<?php
	// khai báo mảng
	// $arr = array();

	// //gán giá trị vào mảng
	// //Cách 1  dùng khi khởi tạng mảng mới
	// $arr = array(1, "zent", 3.35);

	// //in mảng
	// var_dump($arr);	
	// echo "<br>";
	// print_r($arr);

	// echo "<br>";

	// echo "<pre>";
	// 	print_r($arr);
	// echo "</pre>";


	// //cách 2 dùng khi khởi tạng mảng mới
	// $arr1 = array(
	// 	2 => 'Zent',
	// 	3 => 'Group',
	// 	);

	// echo "<pre>";
	// 	print_r($arr1);
	// echo "</pre>";

	// // cách 3 chèn thêm các đối tượng vào 
	// $arr2 = array();
	// $arr2[] = 'Zent';
	// $arr2[] = 'Group';

	// echo "<pre>";
	// 	print_r($arr2);
	// echo "</pre>";

	// // cách 4 chèn thêm các đối tượng vào 
	// $arr3 = array();
	// $arr3[2] = 'Zent';
	// $arr3[4] = 'Group';

	// echo "<pre>";
	// 	print_r($arr3);
	// echo "</pre>";

	// // tảo mảng không tuần tự
	// // 
	// $info = array();
	// $info[] = "Quang";
	// $info[] = "Nam";
	// $info[] = "0987654321";
	// $info[] = "HN";

	// echo "<br>Student Name: " . $info[0];
	// echo "<br>Student Gender: " . $info[1];
	// echo "<br>Student Phone: " . $info[2];
	// echo "<br>Student Add: " . $info[3];

	// // mảng không tuần tự

	// $info1 = array();
	// $info1['Name'] = "Quang";
	// $info1['Gender'] = "Nam";
	// $info1['Phone'] = "0987654321";
	// $info1['Add'] = "HN";

	// echo "<br>Student Name: " . $info1['Name'];
	// echo "<br>Student Gender: " . $info1['Gender'];
	// echo "<br>Student Phone: " . $info1['Phone'];
	// echo "<br>Student Add: " . $info1['Add'];

	// echo "<br>";

	$arr = array(3,6,'Zent', 2.334, 'Group');

	for ($i=0; $i < count($arr); $i++) { 
		echo "<br> Phần tử thứ " . $i . " là: " . $arr[$i];
	}

	echo "<br>";

	// sử dụng vong lặp foreach
	$info1 = array();
	$info1['Name'] = "Quang";
	$info1['Gender'] = "Nam";
	$info1['Phone'] = "0987654321";
	$info1['Add'] = "HN";

	foreach ($info1 as $ChiSo => $GiaTri) {
		echo "<br>" . $ChiSo . " : " . $GiaTri;
	}
	echo "<br>";

	foreach ($info1 as $value) {
		echo "<br>" . $value;
	}


	





?>