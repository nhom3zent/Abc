<?php 
	include_once 'Connection.php';
	class User
	{
		private $conn; 
		function __construct()
		{
			$connection = new Connection();  // tạo connection mới
			$this->conn = $connection->conn;//gán $conn bên Connection vào biến $conn bên User
		}
		public function All(){//phhương thức lấy toàn bộ dữ liệu
			//Mảng chứa dữ liệu trả về
			$data = array();
			//câu lệnh truy vấn cơ sở dữ liệu
			$query ='SELECT * FROM users';
			// thực thi câu lệnh
			$result = $this->conn->query($query);
			// lấy giá trị từng hàng r gán vào mảng dữ liệu data
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

			return $data;
		}
		public function find($id){ // phuong thức lấy dữ liệu theo id
			$query = 'SELECT * FROM users where id = '.$id; // câu lệnh truy vấn
			$result = $this->conn->query($query); // thực thi
			return $result->fetch_assoc(); // trả lại kết quả mỗi hàng 
		}
		public function create($data){
			$query = "INSERT INTO users(id,name,mobile,email,gender,address) VALUES ('','".$data['name']."','".$data['mobile']."','".$data['email']."','".$data['gender']."','".$data['address']."')";
			$result= $this->conn->query($query);
			// die($result);
		}
		public function update($data){
			$query = "UPDATE users SET name= '".$data['name']."',mobile= '".$data['mobile']."',email= '".$data['email']."',gender= '".$data['gender']."',address= '".$data['address']."' WHERE  id = '".$data['id']."'";
			// die($query);
			$result = $this->conn->query($query);
		}
		public function delete($id){
			$query = "DELETE FROM users WHERE id =".$id;
			// die($query);
			$result =$this->conn->query($query);
		}
	}
	//test
	// $u = new User();
	// $data = $u->All();
	// echo "<pre>";
	// print_r($data);
 ?>