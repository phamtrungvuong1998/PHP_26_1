<?php
	require 'connect.php';
	$data = $_POST;


	$query = "UPDATE categories SET name='". $data['name'] . "' ,description='". $data['description']. "' WHERE  id = " . $data['id'];

	$status = $conn->query($query);
	header("Location: category_edit.php")
?>