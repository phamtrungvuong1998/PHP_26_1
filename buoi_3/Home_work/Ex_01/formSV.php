<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Ex01</title>
</head>
<body>
	<div class="container">
		<h2> PHP 26 - Thực hành gửi dữ liệu dùng POST</h2>
		<form action="post.php" method="post">
			<div class="content">
				<div class="col-md-2">Mã sinh viên :</div>
				<div class="col-md-9"><input type="text" name="ID" class="kiemtra"></div>
				<div class="col-md-1"></div>
			</div>
			<div class="content">
				<div class="col-md-2">Họ và tên :</div>
				<div class="col-md-9"><input type="text" name="name" class="kiemtra"></div>
				<div class="col-md-1 thaydoi"></div>
			</div>
			<div class="content">
				<div class="col-md-2">Số điện thoại :</div>
				<div class="col-md-9"><input type="text" name="phone" class="kiemtra"></div>
				<div class="col-md-1 thaydoi"></div>
			</div>
			<div class="content">
				<div class="col-md-2">Email :</div>
				<div class="col-md-9"><input type="email" name="email" class="kiemtra"></div>
				<div class="col-md-1 thaydoi"></div>
			</div>
			<div class="content">
				<div class="col-md-2"><input type="radio" name="gender" value="Male">Male</div>
				<div class="col-md-2"><input type="radio" name="gender" value="Female">Female</div>
				<div class="col-md-7"><input type="radio" name="gender" value="Other">Other</div>
				<div class="col-md-1 thaydoi"></div>
			</div>
			<div class="content">
				<div class="col-md-2">Địa chỉ :</div>
				<div class="col-md-9"><input type="email" name="address" class="kiemtra"></div>
				<div class="col-md-1 thaydoi"></div>
			</div>
			<div class="col-md-12 content"><button class="btn btn-primary" onclick='check()'>Lưu thông tin</button></div>	
		</form>
	</div>
	<script type="text/javascript">
		var checks = document.getElementsByClassName('kiemtra');
		var thaydoi = document.getElementsByClassName('thaydoi');
		function check() {
			if (checks.value = "") {
				thaydoi.innerHTML = "bạn phải nhập đầy đủ thông tin";
			}
		}
	</script>
</body>
</html>