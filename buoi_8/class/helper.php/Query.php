<?php
class Query{
	private $conn;
	public function __construct(){
		$connection = new Connection();

		$this->conn = $connection->connect();
	}

	protected function select($table, $columns = '*')
	{


		if ($columns == '*') {
			$query = "SELECT * FROM " . $table;
		}else if (is_array($columns)) {
			$sub_string = '';
			foreach ($columns as $i => $column) {
				$sub_string .= $column;

				if ($i + 1 != count($columns)) {
					$sub_string .= ',';
				}
			}
			$query = "SELECT " . $sub_string . " FROM " . $table;
		}else{
			exit();
		}
// var_dump($conn);

// echo $query;
// die();
//Bước 3
		$connection = new Connection();

		$conn = $connection->connect();

		// $connection = connect();



		$result = $this->conn->query($query);

		$data = array();

		while($row = $result->fetch_assoc()) { 
			$data[] = $row;
		}
		return $data;
	}

	function insert($table, $data){
		$query = "INSERT INTO $table";
		$string_1 = '';
		$string_2 = '';
		$i = 0;

		foreach ($data as $column => $value) {
			$i++;
			$string_1 .= $column;
			if ($i != count($data)) {
				$string_1 .= ',';

			}

			$string_2 .= "'" . $value . "'";
			if ($i != count($data)) {
				$string_2 .= ',';

			}
		}

			$string = ' (' .$string_1 . ')' . ' VALUE ' . '(' . $string_2 . ')';

			$query = $query . $string;

			// echo $query;
			// die();

			$connection = new Connection();
			$conn = $connection->connect();
			$status = $conn->query($query);

			return $status;
		
	}
}
?>