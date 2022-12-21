<?php
#Hàm trả về dữ liệu trong nội bộ hàm
// Ex1
function show_array($data)
{
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}
// Ex2
// function sum($a, $b) {
// 	$t = $a + $b;
// 	echo $t;
// }
#Hàm trả dữ liệu thông qua: return
function sum($a, $b)
{
	$t = $a + $b;
	return $t;
}
// echo $t; sai
$tong = sum(3, 5);
echo "Tổng= " . $tong;
