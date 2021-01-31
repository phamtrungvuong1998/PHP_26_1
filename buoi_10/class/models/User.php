<?php

require_once 'co/Model.php';

class User extends Model{

	public $table = 'users';

	public function check($username, $pwd){
		$data = $this->where($this->table,[
			'name' => $username,
			'password' => $pwd
		]);

		if (count($data) == 1) {
		 	return true;
		}else{
			return false;
		}
	}
}

?>