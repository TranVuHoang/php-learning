<?php 
// TẦM VỰC CỦA BIẾN BÊN TRONG HÀM
$a = 10;
$b = 5;
echo "a = $a, b =  $b <br/>";
//TH bình thường
// function sum($a, $b) {
// 	$a, $b; 
// 	return $a + $b;
// }

# Cách 1: biến global
// function sum() {
// 	global $a, $b; 
// 	return $a + $b;
// }

# Cách 2: biến global
function sum() {
	
	return $GLOBALS['a']+ $GLOBALS['b'];
}
echo sum();

function hieu() {
	return $GLOBALS['a'] - $GLOBALS['b'];
}
echo "<br/>".hieu();
 ?>