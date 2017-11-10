
<?php 
	session_start();
	// echo "<pre>";
	// print_r($_SESSION);
	// echo "</pre>";
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		div{
			margin-left: 200px;
		}
		.mail-field{
 			width: 70%; 
		}
	</style>
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/script.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
</head>
<body>
		<h2 style="text-align: center;">ZENT GROUP - PHP - Thực hành về gửi dữ liệu trong POST</h2>
		<h3 style="text-align: center;">Thông tin sinh viên</h3>
		<div>
		<?php
		foreach ($_SESSION['thongtin'] as $key => $value) {
			echo "<br>-" . $key . ": " . $value;
		}
		?>
		</div>
		<a href="BTVN04_1.php" class="btn btn-danger">Quay lại</a>
                        
</body>
</html>
