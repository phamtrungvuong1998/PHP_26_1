<?php
	// $array = [1, 'zent','Be all you can be ! '];
	// var_dump($array);
	// print_r($array);

	$arr_name= array(
		0 => ' Zent ',
		9 => 'Be all you can be ! '
	);

	var_dump($arr_name);
	print_r($arr_name);
	$arr_name[1]= 'Zent group';
	$arr_name[2]= 'Be all you can be ! ';
	$arr_name[3] = 2;
	$arr_name['name'] = 'Trung Vuong';

	// echo " <br> Phần tử thứ 0 : " . $arr_name[0];
	// echo " <br> Phần tử thứ 1 : " . $arr_name[1];
	// echo " <br> Họ và tên : " . $arr_name['name'];

	foreach ($arr_name as $key => $value ) {
		if($key == 9){
			continue;
		}
		echo " <br> Phần tử thứ " . $key  ." : " . $value;
	}

	$arr_name_2 = [1,2,3,4,5];
	for ($i=0; $i < count($arr_name); $i++) { 
		echo "string";
	}
?>