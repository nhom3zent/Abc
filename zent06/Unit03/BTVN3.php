<?php
	// // bài 1
	// $arr = array(3,6,4, 2, 8);

	// $tong = 0;
	// $tb = 0;
	// echo "Các số trong mảng là: ";
	// 	for ($i=0; $i < count($arr); $i++) {
	// 		echo $arr[$i] . " " ;
	// 		$tong = $tong + $arr[$i];
	// 	}
	// 	echo "<br>Giá trị trung bình của n số là: " . $tong/count($arr); 

	// //bài 2
	// echo "<BR>";
	// $arr = array(3,6,9, 20, 8);

	// $max = $arr[0];
	// for ($i=0; $i < count($arr); $i++) { 
	// 	if ($max<$arr[$i]) {
	// 		$max = $arr[$i];
	// 	}
	// }
	// 	echo "<BR>Giá trị lớn nhất trong mảng là: " . $max;
	// 	$index = array_search($max, $arr);

	// 	echo "<BR>Vị trí của phần tử lớn nhất trong mảng là: " . $index;

	 //bài 3
	
	// $arr = array(3, 6, 8, 12, 1, 9, 20, 8);
	// $k =8;
	// $count = 0;
	// for ($i=0; $i < count($arr) ; $i++) { 
	// 	if ($k == $arr[$i]) {
	// 		$count++;
	// 	}
	// }
	// echo "<br>Số lần xuất hiện của ".$k." là " . $count . " lần.";

	// // bài 4
	// echo "<br>";

	// $arr = array(3, 6, 9, 20, 8);
	// echo "Phần tử của mảng là:";
	// for ($i=0; $i < count($arr); $i++) { 
	// 	echo " " . $arr[$i] . " ";
	// }
	// echo "<br>";
	// echo "Phần tử ngược của mảng là: ";
	// for ($j = count($arr)-1; $j >= 0 ; $j--) { 
	// 	echo " " . $arr[$j] . " ";
	// }

	// // Bài 5

	// $arr = array(3, 6, 8, 12, 1, 9, 20, 8);
	// $k =3;
	// echo "<br>Mảng sau khi xóa phần tử thứ ".$k. " là: ";
	// for ($i=0; $i < count($arr); $i++) { 
	// 	if ($k == $i) {
	// 		$arr[$i] = "";
	// 	}
	// 	echo " ". $arr[$i];
	// }
	// echo "<br>";
	// $hocweb = array("HTML", "CSS", "JS", "PHP");
	// array_slice($hocweb, 1, 3);
	// for ($i=0; $i < count($hocweb); $i++) { 
	// 	echo " " . $hocweb[$i];
	// }
	// $hocweb = array("HTML", "CSS", "JS", "PHP");
	// print_r(array_slice($hocweb, 1, 2));


	// // Bài 6 Nhập mảng r in ra danh sách chẵn lẻ
	
	// $arr = array(3, 6, 9, 20,7, 8);
 // 	echo "<br>Danh sách số chẵn là: ";
 // 	for ($i=0; $i < count($arr); $i++) { 
 // 		if ($arr[$i]%2==0) {
 // 			echo $arr[$i]. " ";
 // 		}
 // 	}
 // 	echo "<br>Danh sách số lẻ là: ";
 // 	for ($i=0; $i < count($arr); $i++) { 
 // 		if ($arr[$i]%2==1) {
 // 			echo $arr[$i]. " ";
 // 		}
 // 	}
 // 	echo "<br>";
 // 	// Bài 7
	// $arr = array(3, 10, 6, 2, 20,7, 8);
	// echo "<br>Sắp xếp thứ tự tăng dần: ";
	// sort($arr);
	// for ($i=0; $i < count($arr); $i++) {
	// 	if ($i !== count($arr) -1) {
	// 	 	echo  $arr[$i] ."  - ";
	// 	 }else{
	// 	 	echo $arr[count($arr) -1];
	// 	 }
	// }




	
	// // Bài 8
	// echo "<br>" . "Bài 8: ";
	// $arr = "TA DANG QUANG";
	// echo  "Ký tự đầu: " . $arr[0];
	// echo "<br> Ký tự cuối: " . $arr[strlen($arr) - 1];


	// bài 9
	// $arr = "Be you all can be!!eb nac lla uoy eB";
	// echo "<BR>";
	// function ham_dao_nguoc_chuoi($str1)  
	// 	{  
	// 	 $n = strlen($str1);
	// 	 if($n == 1)  
	// 	 {  
	// 		return $str1;  
	// 	 }  
	// 	 else  
	// 	 {  
	// 	   $n--;  
	// 	   return ham_dao_nguoc_chuoi(substr($str1, 1, $n)) . substr($str1, 0, 1);  
	// 	 }  
	// 	}  
	// 	print_r(ham_dao_nguoc_chuoi($arr)."<br>");

	// 	if (ham_dao_nguoc_chuoi($arr) == $arr) {
	// 		echo "true";
	// 	}else{
	// 		echo "false";
	// 	}


		// bài 11
		
		$num = "31332933231";
		echo "<BR>";
		$_chuoi = "";
		$nhom3 = "";
		$num = str_replace(" ", "", $num);
		for ($i= strlen($num) -3; $i >= 0; $i=$i-3) { 
			$nhom3 = substr($num, $i , 3);
			$_chuoi = ",".$nhom3.$_chuoi;

		}	
			$_chuoi =   substr($num, 0, 3+$i). $_chuoi;
		if (substr($_chuoi, 0,1) == ",") {
			$_chuoi = substr($_chuoi, 1 ,strlen($_chuoi) -1);
		}
		echo "<BR>" . $_chuoi;

		// Bài 12
		
		// $name = " ta dang quang  ";
		// $name1 = trim($name);
		// echo "<br>" . ucwords($name1);
		
		// // bài 13

		// $name1 = "Nguyễn Văn Đức Anh";
		// echo "<br>";
		// $mang1 = explode(" ", $name1);
		
		// echo "<br>Họ: " .$mang1[0];
		// echo "<br>Đệm: ";
		// for ($i=0; $i < count($mang1); $i++) { 
		// 	if ($i !== 0 & $i !== count($mang1)-1) {
		// 		echo " " . $mang1[$i];
		// 	}
		// };
		// echo "<br>Tên: ". $mang1[count($mang1)-1];




