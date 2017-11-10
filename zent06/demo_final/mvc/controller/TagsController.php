<?php 
	include_once 'model/Tags.php';
	class TagsController
	{
		private $model; // tạo model mới
		function __construct()
		{
			$this->model = new Tags(); //
		}
		public function index(){
			$date = $this->model->All();
			foreach ($date as $key => $value) {
			}
			include_once('view/tags/TagsList.php');
		}
		public function show($id){
			$data = $this->model->find($id);
			include_once('view/tags/Tagsdetail.php');
		}
		public function create(){
			include_once('view/tags/Tagsadd.php');
		}
		public function store(){
			$data['name']=$_POST['name'];
			$data['post_id']=$_POST['post_id'];
			$this->model->create($data);
			header("Location: index.php?mod=tag");
		}
		public function edit(){
			$id = $_GET['id'];
			$data = $this->model->find($id);

			include_once('view/tags/Tagsupdate.php');
		}
		public function update(){
			 // echo $_POST['id'];
			 // echo $_POST['post_id'];
			 // die;
			$data['id']=$_POST['id'];
			$data['name']=$_POST['name'];
			$data['post_id']=$_POST['post_id'];
			// echo $data['post_id'];die;
			echo "<pre>";
			// print_r($data);die;
			$data = $this->model->update($data);
			header('Location: index.php?mod=tag');
		}
		public function delete(){
			$id = $_GET['id'];
			$data = $this->model->delete($id);
			header('Location: index.php?mod=tag');


		}
	}
 ?>