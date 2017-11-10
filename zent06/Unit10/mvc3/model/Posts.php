<?php 
	include_once 'Connection.php';
	class Posts
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
			$query ='SELECT * FROM posts';
			// thực thi câu lệnh
			$result = $this->conn->query($query);
			// lấy giá trị từng hàng r gán vào mảng dữ liệu data
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

			return $data;
		}
		public function find($id){ // phuong thức lấy dữ liệu theo id
			$query = 'SELECT * FROM posts where id = '.$id; // câu lệnh truy vấn
			$result = $this->conn->query($query); // thực thi
			return $result->fetch_assoc(); // trả lại kết quả mỗi hàng 
		}
		public function create(){
			
		}
	}
	//test
	// $u = new User();
	// $data = $u->All();
	// echo "<pre>";
	// print_r($data);
 ?>