<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Document</title>
</head>
<body>
	<h1 align="center">Danh Sách người dùng</h1>
	<div class="container">
		<div class="col-md-12">
			<button class="btn btn-primary"><a href="add.php" style="color: black">Thêm mới</a></button>
		</div>
		<div>
			<div class="col-md-3">#</div>
			<div class="col-md-3">Mã sinh viên</div>
			<div class="col-md-3">Họ và tên</div>
			<div class="col-md-3">Action</div>
		</div>
		<div>
			<?php
				if (isset($_SESSION['user'])) {
					foreach ($_SESSION['user'] as $user) {
			?>
			<div class="col-md-3"></div>
			<div class="col-md-3"><?php echo $user['ID']; ?></div>
			<div class="col-md-3"><?php echo $user['name'];?></div>
			<div class="col-md-3">
				<div class="col-md-3">
					<form action="delete.php" method="get">
						<input type="hidden" name="index" value="<?php echo $user['id'];?>">
						<button>Delete</button>
					</form>
				</div>
				<div class="col-md-9">
					<form action="detail.php" method="get">
						<input type="hidden" name="index" value="<?php echo $user['id'];?>">
						<button>Detail</button>
					</form>
				</div>
			</div>
			<?php
					}
				}
			?>
		</div>
	</div>
</body>
</html>