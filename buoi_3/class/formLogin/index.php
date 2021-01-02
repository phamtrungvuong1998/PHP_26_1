
<?php
	session_start();
	if (isset($_SESSION['login'])) {
		echo '<a href="logout.php">dang xuat</a>';
	} else {
		echo '<a href="login.php">dang nhap</a>';
	}
	if (isset($_COOKIE['error'])) {
		echo $_COOKIE['error'];
	}
	if (isset($_COOKIE['suscess'])) {
		echo $_COOKIE['suscess'];
	}
	if (isset($_SESSION['login'])) {
		echo 'Da login';
	} else {
		echo 'chua login';
	}
?>