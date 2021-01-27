<?php
	require_once '../helper.php/Connection.php';	
	class Post{
		function getList(){
			$query = "SELECT * FROM categories";
				
				$connection = new Connection();

				$conn = $connection->connect();
 				$result = $conn->query($query);
 				



				$posts = array();

				while($row = $result->fetch_assoc()) { 
					$posts[] = $row;
				}

				return $posts; 

		}

	}
?>