<?php
	$string = " vŨ văN thUoNg ";
	$string2 = mb_strtolower($string);
	$index1 = strpos($string2, " ");
	$index2 = strripos($string2, " ");
	$string3 = substr($string2, $index1, $index2);
	echo $string3;
?>