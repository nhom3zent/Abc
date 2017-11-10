<?php 
	
	$mod = isset($_GET['mod'])?$_GET['mod']:'posts';
	switch ($mod) {
		case 'posts':
			include_once('controller/PostsController.php');
			$posts = new PostController();
			$act = isset($_GET['act'])?$_GET['act']:'index';
			switch ($act) {
				case 'index':
					$posts->index();
					break;
				case 'show':
					$id = $_GET['id'];
					$posts->show($id);
					break;
				case 'create':
					$posts->create();
					break;
				case 'store':
					$posts->store();
					break;
				case 'edit':
					$posts->edit();
					break;
				case 'update':
					$posts->update();
					break;				
				case 'delete':
					$posts->delete();
					break;
				
				default:
					# code...
					break;
			}
			break;
		
		default:
			# code...
			break;
	}

 ?>