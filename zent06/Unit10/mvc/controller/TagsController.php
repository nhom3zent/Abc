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
	}
 ?>