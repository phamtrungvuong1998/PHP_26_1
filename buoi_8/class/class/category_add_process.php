<?php
require_once '../helper.php/queryhelper.php';
require_once '../helper.php/Category.php';
	
// $conn = new mysqli($servername, $username, $password, $dbname);

// Lấy dữ liệu từ form gửi lên, gán vào biến data
    $data = $_POST;

// Viết câu lệnh để thêm dữ liệu
// $query = "INSERT INTO categories (name, description) VALUES ('".$data['name']. "','".$data['description'] . "')";

    $data_insert = [
    	'name' => $data['name'],
    	'description' => $data['description']
    ];

    $category = new Category();
// Thực thi câu lệnh
    $status = $category->create($data_insert);


    header("Location: categories.php");
?>