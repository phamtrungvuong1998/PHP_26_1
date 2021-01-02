<?php
	session_start();
	foreach ($_SESSION['user'] as $user) {
		if ($_GET['index'] == $user['id']) {
			echo 'Mã sinh viên : ' . $user['id'] . '<br>';
			echo 'Họ và tên : ' . $user['name'] . '<br>';
			echo 'Số điện thoại : ' . $user['phone'] . '<br>';
			echo 'Email : ' . $user['email'] . '<br>';
			echo 'Giới tính : ' . $user['gender'] . '<br>';
			echo 'Địa chỉ : ' . $user['address'] . '<br>';
		}
	}
?>