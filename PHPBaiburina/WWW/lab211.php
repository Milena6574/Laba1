<p> Вариант 3 </p>

<?php
    $sumdel=0;
    $x=rand(2,1000);
    print("Число $x");

    for ($c=2;$c<$x;$c++){
        if ($x%$c==0){
          	$sumdel +=$c; 	
	}
     }
    if ($sumdel==0){ 
	print("<p> 0");
    }
	else {
	print("<p> $sumdel ");

 }
?>