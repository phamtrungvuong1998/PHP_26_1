<?php
//Kiể dữ liệu
	$arr = ['Trung', 'Vuong'];
	echo $arr[1];
	// $arr = {
	// 	'name' => 'Trung';
	// }

	$numb = 4;
	if ($numb > 0){
		echo $numb . " la so duong <br>";
		if($numb % 2 == 0){
			echo $numb . " la so duong chan <br>";
		}else{
			echo $numb . " la so duong le <br>";
		}
	}else if($numb < 0){
		echo $numb . " la so am ";
		if($numb % 2 == 0){
			echo $numb . " la so am chan ";
		}else{
			echo $numb . " la so am le ";
		}
	}else{
		echo $numb . " la so khong ";
	}

	$num = 3;
	if ($num == 2) {
		echo "Hom nay la thu hai <br>";
	}else if ($num == 3){
		echo "Hom nay la thu ba <br>";
	}else if ($num == 4){
		echo "Hom nay la thu tu <br>";
	}else if ($num == 5){
		echo "Hom nay la thu nam <br>";
	}else if ($num == 6){
		echo "Hom nay la thu sau <br>";
	}else if ($num == 7){
		echo "Hom nay la thu bay <br>";
	}else if ($num == 8){
		echo "Hom nay la chu nhat <br>";
	}

	$numa = 5;

	switch ($numa) {
		case 2: {
			echo "Hom nay la thu hai";
		} break;
		case 3: {
			echo "Hom nay la thu ba";
		} break;
		case 4: {
			echo "Hom nay la thu tu";
		} break;
		case 5: {
			echo "Hom nay la thu nam";
		} break;
		case 6: {
			echo "Hom nay la thu sau";
		} break;
		case 7: {
			echo "Hom nay la thu bay";
		} break;
		case 8; {
			echo "hom nay la chu nhat";
		} break;
		default: {
			echo "khong hop le";
		} break;
	}

?>