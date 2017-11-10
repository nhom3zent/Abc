<?php 
	include_once 'model/Posts.php';
	class PostsController
	{
		private $model; // tạo model mới
		function __construct()
		{
			$this->model = new Posts(); //
		}
		public function index(){
			$date = $this->model->All();
			foreach ($date as $key => $value) {
			}
			include_once('view/posts/PostsList.php');
		}
		public function show($id){
			$data = $this->model->find($id);
			echo "<pre>";
	// print_r($data);die;
			include_once('view/posts/Postsdetail.php');
		}
		public function create(){
			include_once('view/posts/Postsadd.php');
		}
		public function store(){
			$data['id']=$_POST['id'];
			$data['user_id']=$_POST['user_id'];
			$data['title']=$_POST['title'];
			$data['description']=$_POST['description'];
			$data['content']=$_POST['content'];
			$data['status']=$_POST['status'];
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
			$data = $this->model->delete($id);
			header('Location: index.php?mod=posts');


		}
	}
 ?>