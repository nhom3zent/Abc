<?php 
	include_once('model/Posts.php');
	class BlogController
	{
		private $model; // tạo model mới
		function __construct()
		{
			$this->model = new Posts(); //
		}
		public function index(){
			$total = $this->model->phantrang();
			$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
	        $limit = 9;
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
			include_once('view/posts/home.php'); // lấy all các text bên lish.php 

			
		}
		public function show($id){
			$data = $this->model->find($id);
	// 		echo "<pre>";
	// print_r($data);die;
			include_once('view/posts/single.php');
		}
	}
 ?>