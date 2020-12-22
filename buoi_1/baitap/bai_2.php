<?php
	//giải phương trình ax + b = 0
	$a = 19;
	$b = 8;
	if ($a == 0) {
		if ($b == 0) {
			echo "phương trình ax + b = 0 có vô số nghiệm";
		}else {
			echo "phương trình ax + b = 0 vô nghiệm";
		}
	}else {
		if ($b == 0) {
			echo "phương trình ax + b = 0 có nghiệm x = 0";
		}else {
			echo "phương trình ax + b = 0 có nghiệm x = " . (-$b/$a) ;
		}
	}
?>