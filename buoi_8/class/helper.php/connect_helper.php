<?php
	function connect()
	{
		$servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

		$username = "root";   // Tên đăng nhập
	
		$password = "";    // Mật khẩu truy cập
	
		$dbname = "bai_5";   // Tên cơ sở dữ liệu muốn kết nối đến

		
			
		$conn = new mysqli($servername, $username, $password, $dbname);
// Tạo kết nối đến CSDL
		if($conn->connect_errno){
			echo "Failed to connect to mySQL : " . $conn->connerct_errno;
			exit();
		}
		return $conn;
	}
?>