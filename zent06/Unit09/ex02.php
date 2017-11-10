<?php 

	//boostrap datetime
	//boostrap admin tee
	class DongVat
	{
		var $nang;
		private $cao;
		var $tuoi;
		function chay()
		{
			echo "<br> Đây là phương thức chạy của DV";
		}
		function ngu()
		{
			echo "<br> Đây là phương thức ngủ của DV";
		}
	}
	class chim extends DongVat{
		var $tieng_hot;
		function bay(){
			echo "<br> Đây là phương thức bay của chim";
		}
		// $chaomao->tuoi = '1tuổi';

	}
		$chaomao = new chim();
		$chaomao->cao = '1m';
		echo "<br>cao: " .$chaomao->cao;

		$chaomao->thap = '1m';
		echo "<br>Thấp: " .$chaomao->thap;
		$chaomao->chay();

 ?>