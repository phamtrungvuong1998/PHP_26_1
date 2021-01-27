<?php
	require_once '../helper.php/Connection.php';
	require_once '../helper.php/Query.php';
	class Category extends Query{

		function getList(){

			$categories = $this->select('categories', ['id', 'name', 'description', 'thumbnail']);

			return $categories;

		}

		function create($data){
			$status = $this->insert('categories',$data);

			return $status;
		}
}
?>