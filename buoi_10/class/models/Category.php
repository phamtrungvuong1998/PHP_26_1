<?php
	require_once 'co/Model.php';
	class Category extends Model{
		var $table = 'categories';
		function getList(){

			$categories = $this->select('categories', ['id', 'name', 'description', 'thumbnail']);

			return $categories;

		}

		function create($data){
			$status = $this->insert($this->table,$data);

			return $status;
		}

		public function find($id){
			$category = $this->getId($this->table, $id);
			return $category;
		}
}
?>