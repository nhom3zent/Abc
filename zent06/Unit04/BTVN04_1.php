<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		.col-md-10{
			margin-left: 200px;
		}
		.mail-field{
 			width: 70%; 
		}
		input{
			height: 30px;
			border-radius: 5px;
		}
	</style>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
</head>
<body>
    <form id="contact-form" class="contact-content " action="" method="POST">
		<h2 style="text-align: center;">ZENT GROUP - PHP - Thực hành về gửi dữ liệu trong POST</h2><br>
		<div class="col-md-10 col-md-offset-3 col-sm-12 col-xs-12 wow zoomOut"   >
			Nhập mã sinh viên <br>
			<input class="form-control mail-field inputc" required="required" type="text" name="code" placeholder="Mã sinh viên"><br><br>
			Nhập họ tên<br>
			<input class="form-control mail-field inputc" required="required" type="text" name="name" placeholder="Họ tên"><br><br>
			Số điện thoại<br>
			<input class="form-control mail-field inputc" required="required" type="phone" name="phone" placeholder="Nhập số điện thoại"><br><br>
			Email<br>
			<input class="form-control mail-field inputc" required="required" type="email" name="email" placeholder="Nhập email"><br><br>
			Giới tính<br>
			<input name="gioitinh" type="radio" value=”Nam”>Nam
			<input name="gioitinh" type="radio" value=”Nữ”>Nữ
			<input name="gioitinh" type="radio" value=”Khác”>Khác<br><br>
			Địa chỉ<br>
			<input class="form-control mail-field inputc" required="required" type="text" name="add" placeholder="Nhập địa chỉ"><br><br>
			<button type="submit" name="submit" id="btn"  class="btn btn-primary orange"><strong>Lưu thông tin</strong></button>
		</div>
	</form>
</body>
</html>

<?php
	session_start();
	if (isset($_POST['submit'])) {
		$info = array(
			'Mã số sinh viên' => $_POST['code'],
			'Họ tên sinh viên' => $_POST['name'],
			'Số điện thoại' => $_POST['phone'],
			'Email' => $_POST['email'],
			'Giới tính' => $_POST['gioitinh'],
			'Địa chỉ' => $_POST['add'],
		);
		$_SESSION['thongtin'] = $info;
		header("Location:bai4_1.php");
	};

?>