<?php
	$san_pham = [
		'SP001' => [
				'code' => 'SP001',
				'name' => 'IP5',
				'price' => 3000000,
				'sl' => 0,
			],

		'SP002' => [
				'code' => 'SP002',
				'name' => 'IP6',
				'price' => 3000000,
				'sl' => 0,
			],
	];

	if (isset($_GET['code'])) {
		$code = $_GET['code'];
	}else{
		$code = '';
	}

	if (is_executable($_SESSION)) {
		# code...
	}
?>