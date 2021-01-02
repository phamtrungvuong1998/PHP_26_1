<?php
	session_start();

	$username = 'Vuong';
	// session_destroy();
	$_SESSION['username'] = $username;
	unset($_SESSION['username']);
?>
<a href="session2.php?username=<?php echo $username; ?>">session2</a>