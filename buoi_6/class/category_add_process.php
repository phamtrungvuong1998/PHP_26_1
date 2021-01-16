<?php
require_once '../helper.php/queryhelper.php';
	
// $conn = new mysqli($servername, $username, $password, $dbname);

// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

// Viết câu lệnh để thêm dữ liệu
// $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']. "','".$data['description'] . "')";

    $data_insert = [
    	'name' => $data['name'],
    	'description' => $data['description']
    ];
// Thực thi câu lệnh
    $status = insert('categories', $data_insert);


    header("Location: categories.php");
?>