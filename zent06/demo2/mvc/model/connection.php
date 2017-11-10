<?php 
	/**
	* 
	*/
	class Connection
	{
		public $conn;
		function __construct()
		{
			$this->conn = new mysqli('localhost', 'root', '', 'blog');
			$this->conn->set_charset('utf8');
			if ($this->conn->connect_error) {
				echo "Connection faile". $this->conn->connect_error;
			}
		}
	}
 ?>