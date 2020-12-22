
	<?php 
				$a = 19;
				$b = 8;
				$c = 98;
			    if ($a == 0) {
			    	if ($b == 0) {
			    		if ($c == 0) {
			    			echo 'Phương trình vô số nghiệm';
			    		}else{
                            echo 'Phương trình vô nghiệm';
			    		}
			    	}else{
			    		echo 'Phương trình có nghiệm duy nhất x = '.(-$c/$a);
			    	}
			    }else{
					$delta = ($b*$b) - (4*$a*$c);
				 
					if ($delta < 0){
						echo 'Phương trình vô nghiệm';
					}
					else if ($delta == 0){
						echo 'Phương trình nghiệp kép x1 = x2 = ' . (-$b/2*$a);
					}
					else {
						echo 'Phương trình có hai nghiệp phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
						echo ' ,x2 = ' . ((-$b - sqrt($delta))/2*$a);
					}
			    }
       ?>