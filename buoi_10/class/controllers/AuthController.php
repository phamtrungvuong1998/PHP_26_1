<?php
require_once 'BaseController.php';
require_once 'models/User.php';

class AuthController extends BaseController{
	public function login(){
		$this->view('auth/login.php');
	}

	public function handle(){
	// 	$user = [
		
	// 		[
	// 			'username' => 'vuong',
	// 			'pwd' => '12345',
	// 		],
		
	// ];

	$username = $_POST["username"];
	$pwd = $_POST['pwd'];
	echo $username . ' - ' . $pwd;

	$use_model = new User();



	$check = $use_model->check($username,$pwd);

	if ($check) {
		// echo 'co';
		$_SESSION['login'] = true;
		echo "Dang nhap thanh cong";
		// header("Location: index.php");
		// setcookie("suscess",'dang nhap thanh cong',time() +2);
	}else{
		echo "dang nhap khong thanh cong";
		// header("Location: index.php");
		// setcookie("error",'dang nhap khong thanh cong',time() +2);
	}
	}

	
} 

?>