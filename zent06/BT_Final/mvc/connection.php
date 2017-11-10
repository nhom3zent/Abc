<?php 
	// phân trang limit
	// thông số kết nối SQL
	$servername = "localhost"; //
	$username = "root"; //Tên đăng nhập
	$password = ""; //Mật khẩu
	$dbname = "blog"; // db muốn kết nối

	// tạo ra kết nối đến CSDL connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	$conn->set_charset("utf8"); //sét utf8 để đọc dữ liệu tiếng việt

	//check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

 ?>