<?php 
	/**
	* 
	*/
	class Connection{
		public $conn;

		public function __construct()
		{
			$severname = 'localhost';
			$username = 'root';
			$password = '';
			$dbname = 'blog';
			// truy vấn cơ sở dữ liệu
			$this->conn = new mysqli($severname, $username, $password, $dbname);
			// lấy dữ liệu bằng tiếng việt
			$this->conn->set_charset('utf8'); 
			// thông báo câu lênhj nêú sai
			if ($this->conn->connect_error) {
				die('Connection failed:' . $this->conn->connect_error);
			}
			
		}
	}
 ?>