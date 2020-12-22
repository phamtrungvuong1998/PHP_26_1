<?php
	$n = 5;
	$S = 0;
	$luythua = 1;
	if ($n == 0) {
		echo "không hợp lệ";
	}else{
		for ($i = 1; $i < $n ; $i++) { 
			$luythua = $luythua * $i;
			$S = $S + $i/$luythua;
		}
		echo "S = " . $S;
	}
?>