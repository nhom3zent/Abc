<?php 
	include_once('header.php');
    // session_destroy();die;
 ?>
 <div class="container-fluid">
    <div class="row">
        <div class="col-lg-8">
			 <?php 
			 	// lấy giá trị của mod từ link, nếu chưa có mod thì gán mod= user
			 	$mod= (isset($_GET['mod']))?$_GET['mod']:'user';
			 	// xét các trường hợp bằng mod, mod tương ứng với case nào thi thực hiện case đó
			 	switch ($mod) {
			 		case 'user': // với trườn hợp case =  user
			 			include_once('controller/UserController.php');// lấy tất cả hàm có trong file UserController
					 	$user = new UserController(); // tạo user mới
					 	$act = isset($_GET['act'])?$_GET['act']:'index'; // thực hiện phương thức get để lấy act/ nếu chưa có thì tự động để act= inđex
					 	switch ($act) {
					 		case 'index': // với act = inđex
					 			$user->index(); // gọi đến function index
					 			break; // kết thúc switch-case 
					 		case 'show':
					 			$id = isset($_GET['id'])?$_GET['id']: 1;// thực hiện phương thức Get để lấy id, nếu chưa có thì gán id =1
					 			$user->show($id);
					 			break;
					 		case 'create':
					 			$user->create();
					 			break;
					 		case 'store':
					 			$user->store();
					 			break;
					 		case 'dangky':
					 			$user->dangky();
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
					 		case 'create':
					 			$tags->create();
					 			break;
					 		case 'store':
					 			$tags->store();
					 			break;
					 		case 'edit':
					 			$tags->edit();
					 			break;
					 		case 'update':
					 			$tags->update();
					 			break;
					 		case 'delete':
					 			$tags->delete();
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
				
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
</div>
 <?php 
 	include_once('footer.php');
?>
