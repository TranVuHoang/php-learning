<?php
function show_array($data)
{
	echo "<pre>";
	print_r($data);
	echo "<pre>";
}
#Bài 1
function check_even($n)
{
	if ($n % 2 == 0)
		return true;
	else {
		return false;
	}
}
$number = 8;
echo $number . "<br/>";
check_even($number);
if (check_even($number))
	echo "==> $number là số nguyên chẵn";
else {
	echo "==> $number là số nguyên lẻ";
}
# Bài 2
// Tính tổng số nguyên tố từ 2 -> $n ($n >= 2)
function check_prime($number)
{
	for ($i = 2; $i <= sqrt($number); $i++) {
		if ($number % $i == 0) {
			return false;
		}
	}
	return true;
}

function total($number)
{
	$sum = 0;
	for ($i = 2; $i <= $number; $i++) {
		if (check_prime($number))
			$sum += $i;
	}
	return $sum;
}
$n = 8;
$tong = total($n);
echo "<br/> Bài 2 <br/>";
echo "<br/>Tổng các số nguyên tố = $tong";
