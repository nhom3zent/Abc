<?php 
	session_start();

	if (isset($_SESSION['login'])) {
		if ($_SESSION['login'] =="admin") {			
			echo "Đây là admin <br>";
			echo "<a href=\"logout.php\" > LogOut</a>";
		}else if($_SESSION['login'] == "tdquang") {
			echo "Chào Quảng <br>";			
			echo "<a href=\"logout.php\">LogOut</a>";
		}
	}
	else{
		header('Location: post_form.php');
	}
 ?>