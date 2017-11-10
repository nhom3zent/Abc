<?php 
	include_once('Connection.php');

	class Model
	{
		public $conn =null;
		public $table = "";
		public $primarykey = "id";
		function __construct()
		{
			$connection = new Connection();
			$this->conn = $connection->conn;
		}

		public function All(){//phương thức lấy toàn bộ dữ liệu
			//Mảng chứa dữ liệu trả về
			$data = array();
			//câu lệnh truy vấn cơ sở dữ liệu
			$query ="SELECT * FROM $this->table";
			// thực thi câu lệnh
			$result = $this->conn->query($query);
			// lấy giá trị từng hàng r gán vào mảng dữ liệu data
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}

			return $data;
		}
		public function find($id){ // phuong thức lấy dữ liệu theo id
			$query = "SELECT * FROM $this->table where $this->primarykey = ".$id; // câu lệnh truy vấn
			$result = $this->conn->query($query); // thực thi
			// die($query);
			return $result->fetch_assoc(); // trả lại kết quả mỗi hàng 
		}

		public function create($data){
			$fields = "";
			$values = "";
			foreach ($data as $key => $value) {
				$fields .= ",$key"; // $fields = $fields . ",$key"
				$values .= ",'".mysqli_real_escape_string($this->conn,$value)."'";
			}
			$fields = trim($fields,",");
			$values = trim($values,",");
			$sql = "INSERT INTO ".$this->table."(".$fields.")VALUES (".$values.")";
			// die($sql);
			$status = $this->conn->query($sql);
			// die($status);
			return $status;
		}

		public function update($data){
			$sql="";
			foreach ($data as $key => $value) {
				$sql .= ",$key='".$value."'";
			}
			$sql = trim($sql,",");
			$query = "UPDATE ".$this->table." SET ".$sql." WHERE ".$this->primarykey."=".$data[$this->primarykey]."";
			// die($query);
			$status = $this->conn->query($query);
			// 
			return $status;
		}

		public function delete($id){
			$query = "DELETE FROM " .$this->table. " WHERE " . $this->primarykey."=".$id;
			// die($query);
			$status = $this->conn->query($query);
			// die($status);
		}
	}
	// include_once('Connection.php');
	// class Model
	// {	
	// 	public $conn = null;
	// 	public $table = "";
	// 	public $primarykey = "id";
		
	// 	function __construct()
	// 	{
	// 		$connection = new Connection();
	// 		$this->conn = $connection->conn;
	// 	}
	// 	public function All(){
	// 		$data = array();

	// 		$query = "SELECT * FROM $this->table";

	// 		$result = $this->conn->query($query);

	// 		while ($row = $result->fetch_assoc()) {
	// 			$data[] = $row;
	// 		}
	// 		return $data;
	// 	}
	// 	public function find($id){
	// 		$query = "SELECT * FROM $this->table where $this->primarykey = ".$id;
	// 		$result = $this->conn->query($query);
	// 		return $result->fetch_assoc();
	// 	}
	// 	public function create(){
	// 		$feilds = '';
	// 		$value = '';
	// 		foreach ($data as $key => $value) {
	// 			$feilds .= ',$key';
	// 			$value .= ',"$value"'; 
	// 		}
	// 		echo $feilds;
	// 		echo $value;die;
	// 		$query = "INSERT INTO " . $this->table ." (".$feilds.") VALUES () ";
	// 	}
	// }
 ?>