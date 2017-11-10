<?php 
	include_once('connection.php');
	/**
	* 
	*/
	class Posts
	{
		private $conn;
		function __construct()
		{
			$connection = new Connection();
			$this->conn = $connection->conn;
		}
		public function All(){
			$data = array();
			$query = 'SELECT * FROM posts';
			$result = $this->conn->query($query);
			while ($row = $result->fetch_assoc()) {
				$data[] = $row;
			}
			return $data;
		}
		public function find($id){
			$query = 'SELECT * FROM posts where id ='. $id;
			$result = $this->conn->query($query);
			return $result->fetch_assoc();
		}
		public function add($data){
			$query = "INSERT INTO posts(user_id,title,description,content,status) VALUES ('".$data['user_id']."','".$data['title']."','".$data['description']."','".$data['content']."','".$data['status']."')";
			// die($query);
			$result = $this->conn->query($query);			
		}
		public function update($data){
			$query = "UPDATE posts SET user_id='".$data['user_id']."',title='".$data['title']."',description='".$data['description']."',content='".$data['content']."',status='".$data['status']."' where id=".$data['id']."";
			$result = $this->conn->query($query);
		}
		public function delete($id){
			$query = "DELETE FROM posts where id = " .$id;
			// die($query);	
			$result = $this->conn->query($query);
			
			// var_dump($result);die;
			// die($result);			
		}
	}
 ?>