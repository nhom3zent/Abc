<?php 
	include_once 'model/User.php';
	class UserController
	{
		private $model; // tạo model
		function __construct()
		{
			$this->model = new User(); //tạo user mới r gán vào $this->model
		}
		public function index(){ // tạo function index
			// $data = $this->model->All();// lây các thông tin đc trả về bên User.php gán vào $data
			
			$total = $this->model->phantrang();
			die($total);
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

			foreach ($data as $key => $value) {// trong mảng, nếu giới tính là 1 thì đổi thành nam, 0 đổi thnahf nữ
				if ($value['gender']==1) {
					$data[$key]['gender'] = 'Nam';
				}else{
					$data[$key]['gender'] = 'Nữ';
				}
			}
			include_once('view/user/list.php'); // lấy all các text bên lish.php 

			if ($current_page > 1 && $total_page > 1){
                echo '<a href="index.php?mod=user&page='.($current_page-1).'">Prev</a> | ';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<span>'.$i.'</span> | ';
                }
                else{
                    echo '<a href="index.php?mod=user&page='.$i.'">'.$i.'</a> | ';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
            if ($current_page < $total_page && $total_page > 1){
                echo '<a href="index.php?mod=user&page='.($current_page+1).'">Next</a> | ';
            }
		}
		public function show($id){
			$data = $this->model->find($id);
			include_once('view/user/detail.php');
		}
		public function create(){
			include_once('view/user/add.php');
		}
		public function store(){
			$data['name']=$_POST['name'];
			$data['mobile']=$_POST['mobile'];
			$data['email']=$_POST['email'];
			$data['password']=md5($_POST['password']);
			$data['gender']=$_POST['gender'];
			$data['address']=$_POST['address'];
			$this->model->create($data);
			header("Location: index.php?mod=user");
		}
		public function dangky(){
			$data['name']=$_POST['name'];
			$data['mobile']=$_POST['mobile'];
			$data['email']=$_POST['email'];
			$data['password']=md5($_POST['password']);
			$data['gender']=$_POST['gender'];
			$data['address']=$_POST['address'];
			$this->model->create($data);
			header("Location: login.php");
		}
		public function edit(){
			$id = $_GET['id'];
			$data = $this->model->find($id);

			$male = '';
			$female = '';
			$other = '';
			if ($data['gender']==1) {
				$male = 'checked';
			}else if ($data['gender']==0) {
				$female = 'checked';
			}else {
				$other = 'checked';
			}

			include_once('view/user/update.php');
		}
		public function update(){
			 // echo $_POST['id'];
			 // die;
			$data['id']=$_POST['id'];
			$data['name']=$_POST['name'];
			$data['mobile']=$_POST['mobile'];
			$data['email']=$_POST['email'];
			$data['password']=$_POST['password'];
			$data['gender']= $_POST['gender'];
			$data['address']=$_POST['address'];
			echo "<pre>";
			// print_r($data);die;
			$data = $this->model->update($data);
			header('Location: index.php?mod=user');
		}
		public function delete(){
			$id = $_GET['id'];
			$page = $_GET['page'];
			$data = $this->model->delete($id);
			header('Location: index.php?mod=user&page='.$page);


		}
	}
 ?>