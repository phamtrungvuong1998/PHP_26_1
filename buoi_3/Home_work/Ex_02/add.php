<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Ex02</title>
</head>
<body>
	<div class="container">
		<h2> PHP 26 - Thực hành gửi dữ liệu dùng POST</h2>
		<form action="add_process.php" method="post">
			<div>
				<div class="col-md-2">Mã sinh viên :</div>
				<div class="col-md-10"><input type="text" name="ID"></div>
			</div>
			<div>
				<div class="col-md-2">Họ và tên :</div>
				<div class="col-md-10"><input type="text" name="name"></div>
			</div>
			<div>
				<div class="col-md-2">Số điện thoại :</div>
				<div class="col-md-10"><input type="text" name="phone"></div>
			</div>
			<div>
				<div class="col-md-2">Email :</div>
				<div class="col-md-10"><input type="email" name="email"></div>
			</div>
			<div>
				<div class="col-md-1"><input type="radio" name="gender" value="Nam">Male</div>
				<div class="col-md-1" ><input type="radio" name="gender" value="Nữ">Female</div>
				<div class="col-md-10"><input type="radio" name="gender" value="Khác">Other</div>
			</div>
			<div>
				<div class="col-md-2">Địa chỉ :</div>
				<div class="col-md-10"><input type="text" name="address"></div>
			</div>
			<div class="col-md-12"><button class="btn btn-primary">Lưu thông tin</button></div>	
		</form>
	</div>
</body>
</html>