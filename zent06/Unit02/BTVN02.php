<?php
//bải 1
	for ($i=32; $i <= 126; $i++) { 
		echo chr($i) . " ";
	}
	echo "<br>";
	$i=32;
	while ( $i<= 126) {
		echo chr($i) . " ";	
		$i++;
	}
	echo "<br>";
	$i = 32;
	do {
		echo chr($i) . " ";
		$i++;
	}while($i<127)

	//
	$i = 1;
	$giaithua = 1;
	while ($i <= 10) {
		$giaithua = $giaithua * $i;
		$i++;
	}
	echo $giaithua;


	$i = 1;
	$tong = 0;
	$giaithua = 1;
	while ($i <= 10) {
		$giaithua = $giaithua * $i;
		$tong = $tong + $i/$giaithua;
		$i++;
	}
	echo $tong;

	//Bài 6
	$a = 3;
	if ($a % 2 == 0) {
		echo "true";
	}else {
		echo "false";
	}

	//bai7
	for ($i=0; $i <7 ; $i++) { 
		for ($j=0; $j <7 ; $j++) { 
			if ($i == 0 || $i == 6 || $j == 0 || $j == 6) {
				echo "# ";
				if ($j == 6 ) {
					echo "<br>";
				}
			}else {
				echo "&nbsp&nbsp&nbsp";
			}
		}
	}

	// bai 8
	for ($i=0; $i <7 ; $i++) { 
		for ($j=0; $j <7 ; $j++) { 
			if ($i == 0 || $i == 6 || $j == $i) {
				echo "# ";
				if ($i == 0 & $j == 6) {
					echo "<br>";
				}
			}
			elseif ($j == 6 ) {
				echo "<br>";
			}else {
				echo "&nbsp&nbsp&nbsp";
			}
		}
	}

	//bài 9
	for ($i=0; $i <7 ; $i++) { 
		for ($j=0; $j <7 ; $j++) { 
			if ($i == 0 || $i == 6 || $j == $i || $j == 6 - $i) {
				echo "# ";
				if ($i == 0 & $j ==6) {
					echo "<br>";
				}
			}
			elseif ($j == 6 ) {
				echo "<br>";
			}
			else {
				echo "&nbsp&nbsp&nbsp";
			}
		}
	}

	//bài 10
	for ($i=0; $i <7 ; $i++) { 
		for ($j=0; $j <7 ; $j++) { 
			if ($j<=$i) {			
				if ( $n = $j ) {
					echo "$n ";				
					
				}else {
					echo "<br>";
				}
			}
		}
	}

	// bải 11
	$dem = 0;
	echo "Các số chia hết cho 3 hoặc cho 7 từ 1 đến 100 gồm: ";
	for ($i=1; $i < 100; $i++) { 
		if ($i%3==0 || $i%7==0) {
			$dem ++;
			echo "$i - ";
		} 
	}
	echo "<br>";
	echo "Tổng số chia hết cho 3 hoặc cho 7 từ 1 đến 100 là: $dem";


	// Bài 12
	$tong = 0;
	$dem = 0;
	for ($i=1; $i < 100; $i++) { 
		if ($i%2==0) {
			$tong = $tong + $i;
			$dem ++;
		}

		if ($dem == 10) {
		echo "Tổng của $dem số chẵn đầu tiên là : $tong";
			die();
		}
	}
	//bài 13
	for ($i=1; $i < 10; $i++) { 
		for ($j=1; $j < 10; $j++) { 
			if ($j<9) {
				echo "$i x $j = " . $i*$j . " --- ";
			}
			if ($j==9) {
				echo "$i x $j = " . $i*$j;				
				echo "<br>";
			}
		}
	}
?>