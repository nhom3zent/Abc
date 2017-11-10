<?php
	$name = "Zent Group";
	echo "Hello World! <br>";
	echo "<h1 style='text-align:center'> Hello Zent Group... $name" . "</h1>";
	$slogan = "Zent Group";
	echo "Xin chào $slogan";
	echo "<br>";
	//khai báo hằng, tên biến
	define ('NAME', 'Zent Group');
	echo NAME;
	echo "<br>";

	$age = "26";
	echo (int)$age;
	echo "<br>";

	$nu = 6;
	if ($nu == 1) {
		echo "Today is Monday <br>" ;
	} else if ($nu == 2){
		echo "Today is Tuesday <br>";
	} else if ($nu == 3){
		echo "Today is Wednesday <br>";
	} else if ($nu == 4){
		echo "Today is Thursday <br>";
	} else if ($nu == 5){
		echo "Today is Friday <br>";
	} else if ($nu == 6){
		echo "Today is Saturday <br>";
	}else if ($nu == 7){
		echo "Today is Sunday <br>";
	}


	$i = 0;
	while ($i <= 5){
		echo "Hello Zent lần $i";
		echo "<br>";
		$i++;
	}
?>