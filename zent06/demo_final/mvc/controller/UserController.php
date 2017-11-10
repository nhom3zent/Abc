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
			$date = $this->model->All();// lây các thông tin đc trả về bên User.php gán vào $data
			// echo "<pre>";
			// foreach ($date as $key => $value) {
			// 	if ($key==1) {
			// 		print_r($value);
			// 	}
			// }die;
			foreach ($date as $key => $value) {// trong mảng, nếu giới tính là 1 thì đổi thành nam, 0 đổi thnahf nữ
				if ($value['gender']==1) {
					$date[$key]['gender'] = 'Nam';
				}else{
					$date[$key]['gender'] = 'Nữ';
				}
			}
			include_once('view/user/list.php'); // lấy all các text bên lish.php 
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
			$data = $this->model->delete($id);
			header('Location: index.php?mod=user');


		}
	}
 ?>