<?php 
	include_once('Connection.php');
	class Model
	{	
		public $conn = null;
		public $table = "";
		public $primarykey = "id";
		
		function __construct()
		{
			$connection = new Connection();
			$this->conn = $connection->conn;
		}
		public function All(){
			$data = array();

			$query = "SELECT * FROM $this->table";

			$result = $this->conn->query($query);

			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
		public function find($id){
			$query = "SELECT * FROM $this->table where $primarykey = ".$id;
			$result = $this->conn->query($query);
			return $result->fetch_assoc();
		}
		public function create(){
			$feilds = '';
			$value = '';
			foreach ($data as $key => $value) {
				$feilds .= ',$key';
			}
			$query = "INSERT INTO " . $this->table ." (".$feilds.") VALUES () ";
		}
	}
 ?>