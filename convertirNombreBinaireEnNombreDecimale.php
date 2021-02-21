<?php 
 echo "converir un nombre binaire en nombre decimal"; 
 echo '</br>'; 
function decimalToBinary($n){
	$liste = array();
	do{
		$r = $n % 2;
		$liste[] = $r;
		$n = ($n - $r) / 2;

    } while( $n != 0);
   
	return array_reverse($liste);
}
$k = decimalToBinary(20);
for($x = 0; $x < count($k); $x++) {
    echo $k[$x];
}
echo '</br>';
// ***********************************************
echo "converir un nombre binaire en nombre decimal";
echo '</br>';
function binaryToDecimal($b){
	$decimal = 0;
	$puis2 = 1;
	do{
		$decimal = $decimal + ($b % 10) * $puis2;
		$puis2 = 2 * $puis2;
		$b = $b / 10;
	} while( $b != 0 );
	return $decimal;
}
$t = binaryToDecimal(10100);
echo $t;
?>