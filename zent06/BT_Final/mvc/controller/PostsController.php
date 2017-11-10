<?php 
	include_once 'model/Posts.php';
	include_once 'model/User.php';
	class PostsController
	{
		private $model; // tạo model mới
		function __construct()
		{
			$this->model = new Posts(); //
			$this->model1 = new User(); //
		}
		public function index(){
			$total = $this->model->phantrang();
			$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	        $limit = 10;
	        // echo $limit;
	        $total_page = ceil($total / $limit);
	 		// echo $total;
	 		// echo $total_page;
	        if ($current_page > $total_page){
	            $current_page = $total_page;
	        }
	        else if ($current_page < 1){
	            $current_page = 1;
	        }
	 
	        // Tìm Start
	        $start = ($current_page - 1) * $limit;
	        // echo $start;
			$data = $this->model->thongtin($start,$limit);
			// die($result);

			// foreach ($data as $key => $value) {// trong mảng, nếu giới tính là 1 thì đổi thành nam, 0 đổi thnahf nữ
			// 	if ($value['gender']==1) {
			// 		$data[$key]['gender'] = 'Nam';
			// 	}else{
			// 		$data[$key]['gender'] = 'Nữ';
			// 	}
			// }
			include_once('view/posts/PostsList.php'); // lấy all các text bên lish.php 

			if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?mod=posts&page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?mod=posts&page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?mod=posts&page='.($current_page+1).'">Next</a> | ';
            }
		}
		public function show($id){
			$data = $this->model->find($id);
			echo "<pre>";
	// print_r($data);die;
			include_once('view/posts/Postsdetail.php');
		}
		public function create(){
			$data1 = $this->model1->All();
			include_once('view/posts/Postsadd.php');
		}
		public function store(){
			$name = $_POST['user_id'];
			echo $name;
			$data1 = $this->model1->find1($name);
			// echo $data1['id'];die;
			$data['id']=$_POST['id'];
			$data['user_id']=$data1['id'];
			$data['title']=$_POST['title'];
			$data['description']=$_POST['description'];
			$data['content']=$_POST['content'];
			$data['status']=$_POST['status'];
			echo "<pre>";
			// print_r($data);die;
			$this->model->create($data);
			header("Location: index.php?mod=posts");
		}
		public function edit(){
			$id = $_GET['id'];
			// echo $id;die;
			$data = $this->model->find($id);

			include_once('view/posts/Postsupdate.php');
		}
		public function update(){
			 // echo $_POST['id'];
			 // die;
			$data['id']=$_POST['id'];
			$data['user_id']=$_POST['user_id'];
			$data['title']=$_POST['title'];
			$data['description']=$_POST['description'];
			$data['content']=$_POST['content'];
			$data['status']=$_POST['status'];
			echo "<pre>";
			// print_r($data);die;
			$data = $this->model->update($data);
			header('Location: index.php?mod=posts');
		}
		public function delete(){
			$id = $_GET['id'];
			$page = $_GET['page'];
			$data = $this->model->delete($id);
			header('Location: index.php?mod=posts&page='.$page);


		}
	}
 ?>