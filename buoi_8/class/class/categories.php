<?php
    require_once '../helper.php/queryhelper.php';

    require_once '../helper.php/Category.php';

	// Thong so ket noi CSDL
	//Bước 1
// $servername = "localhost"; //255.123.45.21 - Địa chỉ IP của máy chủ chứa CSDL

// $username = "root";   // Tên đăng nhập
	
// $password = "";    // Mật khẩu truy cập
	
// $dbname = "bai_5";   // Tên cơ sở dữ liệu muốn kết nối đến
    // $categories = select('categories', ['id', 'name', 'description', 'thumbnail']);

$category = new Category();

$categories = $category->getList();

	

// Tạo kết nối đến CSDL
	
// $conn = new mysqli($servername, $username, $password, $dbname);

//Bước 2
// $conn = connect();

// $query = "SELECT * FROM categories";
	
// $result = $conn->query($query);
// // var_dump($conn);


// //Bước 3
// $categories = array();

// while($row = $result->fetch_assoc()) { 
// 	$categories[] = $row;
// }

// var_dump($categories);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CATEGORIES</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center">--- CATEGORIES ---</h3>
        <a href="category_add.php" class="btn btn-primary">Add New Category</a>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Thumbnail</th>
                <th>Description</th>
                <th>Action</th>
            </thead>
        <?php foreach ($categories as $item) { ?>
            <tr>
                <td><?php echo $item['id'] ?></td>
                <td><?php echo $item['name'] ?></td>
                <td>
                    <img src="https://video-thumbs.mediacdn.vn//vtv/2018/10/2/0210thoi-su-19h-15384852850441347953968-a1b84_thumb3.jpg" width="100px" height="100px">
                </td>
                <td><?php echo $item['description'] ?></td>
                <td>
                    <a href="#" class="btn btn-primary">Detail</a>
                    <a href="category_edit.php?id=<?php echo $item['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="category_delete.php?id=<?php echo $item['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</body>
</html>