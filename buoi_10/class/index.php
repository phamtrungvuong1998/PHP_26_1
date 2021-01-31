<?php
	if(isset($_GET['mod'])){
		$mod = $_GET['mod'];
	}
	if(isset($_GET['act'])){
		$act = $_GET['act'];
	}
	// $mod = $_GET['mod'];

	// $act = $_GET['act'];

	$class_name = ucfirst($mod) . "Controller";

	$path = __DIR__ ."/controllers/" . $class_name . ".php";

	if (!file_exists($path)) {
		echo "File $path khong ton tai";
		exit();
	}
	require_once($path);

	$controllers_obj = new $class_name();

	if(!method_exists($controllers_obj, $act)){

		echo "Method $act() khong ton tai";
		exit();
	}

	$controllers_obj->$act();	
?>	