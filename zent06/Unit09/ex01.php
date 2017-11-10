<?php 
	//khởi tạo đối tượng từ lớp
	class oto{
		// thuộc tính
		var $ten;
		var $hang;
		var $mau_sac;
		var $kich_thuoc;

		// phương thức
		function chay()
		{
			echo "Đây là phương thức chạy của lớp xe";
		}
		function intt(){
			//in ra thông tin
			echo "<br> Tên: ".$this->ten;
			echo "<br> Hãng: ".$this->hang;
			echo "<br> Màu sắc: ".$this->mau_sac;
			echo "<br> Kích thước: ".$this->kich_thuoc;

		}
	}
	//khởi tạo đối tượng từ lớp
	$bmw = new oto();
	//Gán giá trị vào đồi tượng thuộc tính
	$bmw->ten = 'bmw x5';
	$bmw->hang = 'bmw';
	$bmw->mau_sac = 'hong';
	$bmw->kich_thuoc = '2m';
	$bmw->intt();	

	$morning = new oto();
	$morning->ten = 'Morning 123';
	$morning->hang = 'Morning';
	$morning->mau_sac = 'Đỏ';
	$morning->kich_thuoc = '3m';
	$morning->intt();
 ?>