<?php
    $a=rand(-20,20);
    $d=rand(-20,20);
    $c=rand(-20,20);

    $y=(25/$c-$d+2)/($d+$a*$a-1);

    print("(25 / $c - $d + 2) / ($d + $a * $a - 1) = $y");
?>