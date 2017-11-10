<?php 
	include_once('controller/BlogController.php');// lấy tất cả hàm có trong file UserController
	 	$user = new BlogController(); // tạo user mới
	 	$act = isset($_GET['act'])?$_GET['act']:'index'; // thực hiện phương thức get để lấy act/ nếu chưa có thì tự động để act= inđex
	 	switch ($act) {
	 		case 'index': // với act = inđex
	 			$user->index(); // gọi đến function index
	 			break; // kết thúc switch-case 
	 		case 'show':
	 			$id = isset($_GET['id'])?$_GET['id']: 1;// thực hiện phương thức Get để lấy id, nếu chưa có thì gán id =1
	 			$user->show($id);
	 			break;
 			default:
 			# code...
 			break;
	 	}
 ?>