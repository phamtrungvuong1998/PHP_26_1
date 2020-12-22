<?php
	function kiem_tra_so_chan($number){
		if ($number % 2 == 0) {
			return true;
		}else {
			return false;	
		}
	}

	$number = 12;

	if (kiem_tra_so_chan($number)) {
		echo "so chan <br>";
	}else {
		echo "so le <br>";
	}

	function kiem_tra_so_le($number){
		if ($number % 2 == 0) {
			echo "so chan <br>";
		}else{
			echo "so le";
		}
	}
	kiem_tra_so_le($number);

	echo tinhtong(2, 3, 6);
	function tinhtong($a, $b, $c = false){
		$tong = $a + $b;
		if ($c != false) {
			$tong = $tong + $c;
		}
		return $tong;
	}
?>