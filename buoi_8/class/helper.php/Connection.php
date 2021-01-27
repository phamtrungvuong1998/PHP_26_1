<?php
	class Connection{

		private $servername = "localhost";
		private $username = "root";   // Tên đăng nhập
	
		private $password = "";    // Mật khẩu truy cập
	
		private $dbname = "bai_5";

		function connect(){

			$conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
// Tạo kết nối đến CSDL
			if($conn->connect_errno){
				echo "Failed to connect to mySQL : " . $conn->connerct_errno;
				exit();
			}
			return $conn;
	}
		} 

?>