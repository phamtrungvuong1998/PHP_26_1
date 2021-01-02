<?php
	session_start();
	$user = [
		
			[
				'username' => 'vuong',
				'pwd' => '12345',
			],
		
	];

	$username = $_POST["user"];
	$pwd = $_POST['pwd'];
	echo "string";
	$check = check($username,$pwd);

	if ($check) {
		echo 'co';
		$_SESSION['login'] = true;
		header("Location: index.php");
		setcookie("suscess",'dang nhap thanh cong',time() +2);
	}else{
		header("Location: index.php");
		setcookie("error",'dang nhap khong thanh cong',time() +2);
	}
	function check($username,$pwd){
		$users = [
			[
				'username' => 'vuong',
				'pwd' => '12345',
			]
		];
	foreach ($users as $user) {
		if ($user['username'] == $username && $user['pwd'] == $pwd) {
				return true;
			}
		}
		
		return false;
	} 
?>