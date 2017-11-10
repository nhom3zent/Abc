<?php 
session_start();
	if(isset($_SESSION['email'])){
		$mode = (isset($_GET['mode']))?$_GET['mode']:'user';

		switch ($mode) {
		
			case 'post':

				include_once('controller/PostController.php');

				$post = new PostController();

				if (isset($_GET['act'])) {
					$act = $_GET['act'];
				}
				else{
					$act = 'index';
				}

				switch ($act) {
					case 'index':
						$post->index();
						break;
					case 'show':
						$id=$_GET['id'];
						$post->show($id);
						break;
					case 'create':
						$post->create();
						break;
					case 'store':
						$post->store();
						break;
					case 'edit':
						$post->edit();
						break;
					case 'update':
						$post->update();
						break;
					case 'delete':
						$post->delete();
						break;
					case 'blog':
						$post->blog();
						break;
					default:
						break;
				}
				break;
			
			case 'tags':

				include_once('controller/TagController.php');
					$tag = new TagController();

					if (isset($_GET['act'])) {
						$act = $_GET['act'];
					}
					else{
						$act = 'index';
					}

					switch ($act) {
						case 'index':
							$tag->index();
							break;

						case 'show':
							$id=$_GET['id'];
							$tag->show($id);
							break;
						case 'create':
							$tag->create();
							break;
						case 'store':
							$tag->store();
							break;
						case 'edit':
							$tag->edit();
							break;
						case 'update':
							$tag->update();
							break;
						case 'delete':
							$tag->delete();
							break;
							
						default:
								# code...
							break;
					}
				break;
				
			default:
				include_once('controller/UserController.php');
				$user = new UserController();
				if (isset($_GET['act'])) {
					$act = $_GET['act'];
				}
				else{
					$act = 'index_users';
				}

				switch ($act) {
					case 'index_users':
						$user->index();
						break;
					case 'show':
						$id=$_GET['id'];
						$user->show($id);
						break;
					case 'create':
						$user->create();
						break;
					case 'store':
						$user->store();
						break;
					case 'edit':
						$user->edit();
						break;
					case 'update':
						$user->update();
						break;
					case 'delete':
						$user->delete();
						break;

					default:
						break;
				}
		}
	}
	else{
		header('Location:http://hoadepzai.vtc/mvc_v3/login.php');
	}
 ?>