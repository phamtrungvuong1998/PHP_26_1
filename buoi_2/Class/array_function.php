<?php
	$name = array('Nam', 'Khánh', 'Bình', 'Hậu' , 'Tuấn');
	var_dump(in_array('Hậu', $name));
	echo in_array('Hậu', $name);
	print_r(in_array('Hậu', $name));

	$info = array(
		'ID' => '1212312',
		'NAME' => 'Trung Vuong',
	);
	if(array_key_exists('ID',$info)){
		echo $info['ID'];
	}
	$name = array_push($name, 1, 1);
	var_dump($name);
	$del = array_pop($name); // tra ve phan tu da xoa

  echo "Phần tử bị xóa là : " . $del;

  echo "<pre>";
    print_r($name);
  echo "</pre>";
?>