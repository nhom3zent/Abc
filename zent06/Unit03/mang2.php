<?php
	$name = "Zent Group - Be you all can be !";

	//cắt chuỗi theo ký tự mong muốn 
	$data = explode(" ", $name);
	echo "<pre>";
		print_r($data);
	echo "<?pre>";

	// ghép mảng theo cuỗi ký tự
	// 
	echo implode(" ", $data);


	// kiểm tra độ dài chuỗi
	echo "<br>Độ dài chuỗi: " . strlen($name);


	//Đếm số ký tự của chuỗi 
	echo "<br> Đếm số từ trong chuỗi: " .str_word_count($name);

	//lặp lại số lần
	echo str_repeat("<br>Zent Group", 10);
	echo "<br>";
	// thay thế chuỗi
	echo "<br>". str_replace("all", "Tất cả", $name);

	//hàm băm dữ liệu để bảo mật
	echo "<br> Hàm băm dữ liệu: " . md5('123458');

	// Mã hóa dữ liệu
	echo "<br> Mã hóa dữ liệu: " . sha1('123458');

	// cắt chuỗi con
	echo "<br> Cắt chuỗi con:" . substr($name, 5,14); //cắt từ vị trí thứ 4 có độ dài 14 ký tự

	// cát chuỗi con bắt đầu từ chứ Be
	echo "<br>" .strstr($name, "Be");

	// Tìm vị trí của chuỗi con
	echo "<br>".strpos($name, "Be");
	// Tìm vị trí của thằng Be trong $name, trả về false nếu không thấy

	

?>