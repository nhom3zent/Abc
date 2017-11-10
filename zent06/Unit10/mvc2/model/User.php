<?php 
	include_once 'Model.php';
	class User extends Model
	{
		public $table = 'users';
		
		function __construct()
		{
			parent::__construct();
		}
	}
 ?>