<?php 
	session_start();
	$id = $_GET['ten'];
	$aa = $_SESSION['thongtin'][$id];
 ?>
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
	<?php
		$gtnam="";
		$gtnu="";
		$gtother="";
		if ($aa['gioitinh'] == "Nam") {
			$gtnam = "checked";
		}else if($aa['gioitinh'] == "Nữ"){
			$gtnu = "checked";
		}else{
			$gtother = "checked";
		}

	 ?>
    <form id="contact-form" class="contact-content " action="" method="POST">
		<h2 style="text-align: center;">ZENT GROUP - PHP - Sửa thông tin</h2><br>
		<div class="col-md-10 col-md-offset-3 col-sm-12 col-xs-12 wow zoomOut"   >
			Nhập mã sinh viên <br>
			<input class="form-control mail-field inputc" type="text" name="code" placeholder="Mã sinh viên" value="<?php echo $aa['code']; ?>"><br><br>
			Nhập họ tên<br>
			<input class="form-control mail-field inputc"  type="text" name="name" placeholder="Họ tên" value="<?php echo $aa['name']; ?>"><br><br>
			Số điện thoại<br>
			<input class="form-control mail-field inputc"  type="text" name="phone" placeholder="Nhập số điện thoại" value="<?php echo $aa['phone']; ?>"><br><br>
			Email<br>
			<input class="form-control mail-field inputc"  type="email" name="email" placeholder="Nhập email" value="<?php echo $aa['email']; ?>"><br><br>
			Giới tính<br>
			<input name="gioitinh" type="radio" value=”Nam” <?php echo $gtnam; ?>>Nam
			<input name="gioitinh" type="radio" value=”Nữ” <?php echo $gtnu; ?>>Nữ
			<input name="gioitinh" type="radio" value=”Khác” <?php echo $gtother; ?>>Khác<br><br>
			Địa chỉ<br>
			<input class="form-control mail-field inputc"  type="text" name="add" placeholder="Nhập địa chỉ" value="<?php echo $aa['add']; ?>"><br><br>
			<button type="submit" name="submit" id="btn"  class="btn btn-primary orange"><strong>Lưu thông tin</strong></button>
		</div>
	</form>
</body>
</html>
