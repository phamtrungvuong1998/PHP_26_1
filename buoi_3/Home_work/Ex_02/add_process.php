<?php
	session_start();
	$_SESSION['user'][] =
		[
		'ID' => $_POST['ID'],
		'name' => $_POST['name'],
		'phone' => $_POST['phone'],
		'email' => $_POST['email'],
		'gender' => $_POST['gender'],
		'address' => $_POST['address'],
	];
	header("Location: list.php");
?>