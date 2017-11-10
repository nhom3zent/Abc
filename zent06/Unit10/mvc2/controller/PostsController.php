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
			include_once('view/posts/Postsdetail.php');
		}
	}
 ?>