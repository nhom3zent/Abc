<?php 
	include_once('model/Posts.php');
	/**
	* 
	*/
	class PostController
	{
		public $model;
		function __construct()
		{
			$this->model = new Posts();
		}
		public function index(){
			$data = $this->model->All();
			// echo $a;
			// echo "<pre>";
			// print_r($data);die;
			include_once('view/posts/list.php');
		}
		public function show($id){
			$id = $_GET['id'];
			// die($id);
			$data = $this->model->find($id);
			include 'view/posts/detail.php';
		}
		public function create(){
			include 'view/posts/add.php';
		}
		public function store(){
			$data['user_id']=$_POST['user_id'];
			$data['title']=$_POST['title'];
			$data['description']=$_POST['description'];
			$data['content']=$_POST['content'];
			$data['status']=$_POST['status'];
			// die($data);
			$data = $this->model->add($data);
			header('Location:index.php?mod=posts&act=index');			
		}
		public function edit(){
			$id = $_GET['id'];
			$data = $this->model->find($id);
			include_once('view/posts/update.php');
		}
		public function update(){
			$data['id']=$_POST['id'];
			$data['user_id']=$_POST['user_id'];
			$data['title']=$_POST['title'];
			$data['description']=$_POST['description'];
			$data['content']=$_POST['content'];
			$data['status']=$_POST['status'];
			// die($data);
			$data = $this->model->update($data);
			header('Location:index.php?mod=posts&act=index');
		}
		public function delete(){
			// echo "string";
			$id = $_GET['id'];
			// $a ='';
			$data = $this->model->delete($id);
			// if ($this->model->delete($id)===true) {
			// 	$a = 'Xóa thành công!';
			// }else {
			// 	$a = 'Xóa thất bại!';
			// }
			// echo $a;
			// die($a);	
			header('Location:index.php?mod=posts&act=index');		
		}
	}
 ?>