<?php
	$string = "a,b,c,d";
	$data = explode(",", $string);
	print_r($data);

	$string2 = implode("-", $data);
	echo $string2;
?>