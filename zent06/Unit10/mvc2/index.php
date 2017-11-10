
 <?php //ckeditod
 	// lấy giá trị của mod từ link, nếu chưa có mod thì gán mod= user
 	$mod= (isset($_GET['mod']))?$_GET['mod']:'user';
 	// echo $mod; die();
 	
 	//  
 	switch ($mod) {
 		case 'user':
 			include_once('controller/UserController.php');
		 	$user = new UserController();
		 	$act = isset($_GET['act'])?$_GET['act']:'index';
		 	switch ($act) {
		 		case 'index':
		 			$user->index();
		 			break;
		 		case 'show':
		 			$id = isset($_GET['id'])?$_GET['id']: 1;
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
		 			# code...
		 			break;
		 	}
 			break;
 		case 'posts':
 			include_once('controller/PostsController.php');
		 	$post = new PostsController();
		 	$act = isset($_GET['act'])?$_GET['act']:'index';
		 	switch ($act) {
		 		case 'index':
		 			$post->index();
		 			break;
		 		case 'show':
		 			$id = isset($_GET['id'])?$_GET['id']: 1;
		 			$post->show($id);
		 			break;
		 		
		 		default:
		 			# code...
		 			break;
		 	}
 			break;
 		case 'tag':
 			include_once('controller/TagsController.php');
		 	$tags = new TagsController();
		 	$act = isset($_GET['act'])?$_GET['act']:'index';
		 	switch ($act) {
		 		case 'index':
		 			$tags->index();
		 			break;
		 		case 'show':
		 			$id = isset($_GET['id'])?$_GET['id']: 1;
		 			$tags->show($id);
		 			break;
		 		
		 		default:
		 			# code...
		 			break;
		 	}
 			break;
 		
 		default:

 			break;
 	}
  ?>