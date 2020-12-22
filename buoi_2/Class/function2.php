<?php
	$bien_toan_cuc = 12;

	function kiemtra(){
		$bien_cuc_bo = 13;
		// $bien_cuc_bo++;
		// echo $bien_cuc_bo;

		global $bien_toan_cuc;
		$bien_toan_cuc++;
		echo $bien_toan_cuc;
	}
	kiemtra();
	kiemtra();

	// ham kiem tra
function kiem_tra2()
{
    // bien tinh
    static $a = 0;
    $a++;
    echo $a;
}
  
kiem_tra2();
kiem_tra2();
?>