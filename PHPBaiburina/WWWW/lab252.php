<p> Вариант-5:
<p>
<?php
$a=rand(-10,10);
$b=rand(-10,10);
function f($u, $t) {
    if ( $u >= 0 && $t >= 0 ){
        return $u-2*$t;
    }elseif ( $u <= 0 && $t >= 0 ){
        return $u+$t;
    }elseif ($u>=0 && $t<0){
        return $u*$u-2*$t;
    }elseif ($u<0 && $t<0){
	return $u*$t+3*$t;
}
}
$Z=f($a,$b*$b-$a)+f($a,$b);
echo "A=".$a." B=".$b."<br/>";
echo "Z=".$Z;
?>