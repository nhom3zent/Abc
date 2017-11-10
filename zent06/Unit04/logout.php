<?php 
	session_start();

	session_destroy();

	header('Location: post_form.php')

 ?>