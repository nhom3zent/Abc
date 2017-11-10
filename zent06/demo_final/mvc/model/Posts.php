<?php 
	include_once 'Model.php';
	class Posts extends Model
	{
		public $table = 'posts';
		
		function __construct()
		{
			parent::__construct();
		}
	}
?>