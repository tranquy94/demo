<HTML>
<HEAD>
	<TITLE>::Welcome to PHP</TITLE>
</HEAD>
<BODY>
	<h4>Khai báo xuat</h4>
	<?php
// 	$nhanvien = array(1, "hello", 1, "world", "hello");
// 	// $nhanvien[0] = 'Tran van quy';
// 	// $nhanvien[1] = 'itvg';
// 	// $nhanvien[2] = 'code';
// 	// $nhanvien[3] = 'hoc php thuan';
// 	$nhanvien = array_change_key_case($nhanvien, CASE_UPPER);
// var_dump($nhanvien);

// $array_keys = array('a', 'b', 'c');
// $array_values = array('one','tow', 'three');
// print_r(array_combine($array_keys, $array_values));
	// $nhanvien = array('helo', '1', '1', '2', '2');
	// $nhanvien = array_count_values($nhanvien);
	// print_r($nhanvien);

	$input_array = array('a', 'b', 'c', 'd', 'e');
	// print_r(array_chunk($input_array, 2));
	// print_r(array_chunk($input_array, 2, true));
	$fruit = array_pop($input_array);
	print_r($input_array);


// 	// $array = array(
// 	// 	'chu_thuong' => 'Hello'
// 	// );

	// $nhanvien = array_change_key_case($nhanvien, CASE_UPPER);

	// var_dump($nhanvien);
	

	$a = '1';
	$a = (string)$a;
	is_string($a);
	echo $a;
	$b = 'tranquy23';
	$b = (boolean)$b;
	is_bool($b);
	$c = '1.253558';
	$c = (float)$c;
	print_r($c);
	$d = '123a';
	$d = (int)$d;
	echo $d;
	?>
</BODY>