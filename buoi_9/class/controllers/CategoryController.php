<?php
require_once 'models/Category.php';

class CategoryController{
	public function list(){
		$category = new Category();
		$categories = $category->getList();
		require_once 'views/categories/list.php';
	}

	//Hien thi re form tao moi
	public function create(){
		require_once 'views/categories/create.php';
	}


	//Luu tru du lieu


	public function store(){
		$data = $_POST;
		$data_insert = [
    	'name' => $data['name'],
    	'description' => $data['description']
    ];

    	$category = new Category();
    	$status = $category->create($data_insert);
    	var_dump($data_insert);
    	header("Location:index.php?mod=category&act=list");
	}

	public function edit(){
		$id = $_GET['id'];
		$category_obj = new Category();
		$category = $category_obj->find($id);
		require_once 'views/categories/edit.php';

	}

	public function update(){

	}
}
?>