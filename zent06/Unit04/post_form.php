<?php 
		
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<style>
		input{
			height: 30px;
			border-radius: 5px;
		}
	</style>
</head>
<body>
	<form action="" method="POST" accept-charset="utf-8">
			Tài khoản: <br>
			<input class="form-control mail-field inputc" required="required" type="text" name="user" placeholder="Tài khoản"><br><br>
			Mật khẩu<br>
			<input class="form-control mail-field inputc" required="required" type="password" name="pwd" placeholder="Mật khẩu"><br><br>
			<button type="submit" name="submit" id="btn"  class="btn btn-primary orange"><strong>Đăng nhập</strong></button>
	</form>
</body>
</html>

<?php
	session_start();

	if (isset($_POST['submit'])) {
		$user = $_POST['user'];
		$pwd = $_POST['pwd'];	

		if ($user == "admin" && $pwd =='123') {
			$_SESSION['login'] = 'admin';
			header('Location:index.php');
		}
		else if($user == "tdquang" && $pwd=="12"){
			$_SESSION['login'] = 'tdquang';
			header('Location:index.php');
		}
		else{
			echo "Đăng nhập thất bại.";
		}
	}
	



?>