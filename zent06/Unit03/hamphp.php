<?php 
	
	$arr = array("Tạ", "Mạnh", "Đăng", "Tùng", "Đăng", "Quảng");
	//in_array: kiểm tra phần tử có trong mảng hay không
	if (in_array('Quảng', $arr)) {
		echo "Xin chào Quảng...";
	}else{
		echo "Chưa tồn tại!";
	}
	// count: đếm số lượng phần tử trong mảng
	echo "<br>";
	echo "Số phần tử trong mảng: " . count($arr);
	
	$info1 = array();
	$info1['Name'] = "Quang";
	$info1['Gender'] = "Nam";
	$info1['Phone'] = "0987654321";
	$info1['Add'] = "HN";
	// array_key_exists
	// Kiểm tra key có tồn tại hay không
	
	if (array_key_exists('Add', $info1)) {
		echo "<br> Add là : " . $info1['Add'];
	}else{
		echo "không tồn tại Add";
	}


	echo "<br>";
	// array_search trả về index của phần tử nếu tìm thấy
	$index = array_search('Đăng', $arr);

	if ($index !== false) {
		echo "Vị trí phần tử là " . $index;
	}else{
		echo "Không tìm thấy phần tử.";
	}

	// array_count_values(Tên mảng) : đếm số phần tử cần tìm có trong mảng
	$arr_dât = array_count_values($arr);
	echo "<pre>";
		print_r($arr_dât);
	echo "<?pre>";

	// array_push thêm các phần tử vào cuối mảng
	array_push($arr, "Nam", "Hải", "Cường");
	echo "<pre>";
		print_r($arr);
	echo "<?pre>";

	//array_pop(Tên mảng): xóa đi bớt phần tử cuối cùng của mảng
	$del = array_pop($arr);
	echo "<br>Phần tử vừa xóa là: " . $del;
	echo "<pre>";
		print_r($arr);
	echo "<?pre>";

	//array_shift(Tên mảng): xóa đi bớt phần tử đầu tiên của mảng
	$del = array_shift($arr);
	echo "<br>Phần tử vừa xóa là: " . $del;
	echo "<pre>";
		print_r($arr);
	echo "<?pre>";

	//array_unshift(Tên mảng): thêm phần tử vào đầu mảng
	$del1 = array_unshift($arr, 'Tạ');
	echo "<br>Phần tử vừa thêm là: " . $del1;
	echo "<pre>";
		print_r($arr);
	echo "<?pre>";

	//array_ununique(Tên mảng): lấy ra các phần tử trong mảng mà k trùng nhau
	$arr=  	array_unique($arr);
	echo "<pre>";
		print_r($arr);
	echo "<?pre>";


	$arr_key = array('1','2','3');
	$arr_val = array('4','5','6');
	$arr_info = array_combine($arr_key, $arr_val);
	var_dump(is_array($arr_info));

	echo "<br> Xóa:";
	
?>	