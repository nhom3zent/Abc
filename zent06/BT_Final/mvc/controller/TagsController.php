<?php 
	include_once 'model/Tags.php';
	include_once 'model/Posts.php';
	class TagsController
	{
		private $model; // tạo model mới
		private $model1; // tạo model mới
		function __construct()
		{
			$this->model = new Tags(); //
			$this->model1 = new Posts(); //
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
			include_once('view/tags/TagsList.php'); // lấy all các text bên lish.php 

			if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?mod=tag&page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?mod=tag&page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?mod=tag&page='.($current_page+1).'">Next</a> | ';
            }
		}
		public function show($id){
			$data = $this->model->find($id);
			include_once('view/tags/Tagsdetail.php');
		}
		public function create(){
			$data1 = $this->model1->All();
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