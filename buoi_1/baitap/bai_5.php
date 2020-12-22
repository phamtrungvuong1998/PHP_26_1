<?php
	$sum = 0;
	for ($i= 0; $i <= 10 ; $i++) { 
		if ($i % 2 == 0) {
			$sum = $sum + $i;
		}
	}
	echo "Tổng 10 số chẵn đầu tiên là : " . $sum;
?>