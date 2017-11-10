<?php
	$arr1 = array(2,3,'Abc');
	echo "<br> array 1: ";
	foreach ($arr1 as $key => $value) {
		echo $value . "&nbsp&nbsp&nbsp&nbsp&nbsp";
	}

	$arr2 = array(5,8,'Zent');
	echo "<br> array 2: ";
	foreach ($arr2 as $key => $value) {
		echo $value . "&nbsp&nbsp&nbsp&nbsp&nbsp";
	}

	


	$arr2D = array(
			$arr1,
			$arr2
		);
	
	// thêm giá trị mảng 2 chiều
	$arr2D[0][3] = 12;
	
	// thêm mảng
	$arr2D[2][1] = 2;

	echo "<pre>";
		print_r($arr2D);
	echo "<?pre>";

	echo $arr2D[1][2];


	












?>