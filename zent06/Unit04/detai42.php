
<?php 
	session_start();
	$id = $_GET['code'];
	$abc = $_SESSION['thongtin42'][$id];
	print_r($id);
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
		<h2 style="text-align: center;">Thông tin sinh viên</h2>
		<div>
		<?php
		// foreach ($_SESSION['thongtin42'] as $key => $value) {
		// echo "<br>-" . $key . ": " . $value;
		// }
		if (isset($_SESSION['thongtin42'])) {
			echo 'Mã số sinh viên: ' . $abc['code'];
		}
		?>
		</div>
</body>
</html>
