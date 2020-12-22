<?php
	$name = "Pham Trung Vuong";
	$data = explode(" ", $name);
	print_r($data);
	echo "Họ : " . $data[0];
	
	echo "Tên : " . $data[count($data) - 1];
?>