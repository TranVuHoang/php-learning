<?php
//=================================
// CẤU TRÚC ĐIỀU KIỆN IF
//=================================

#if
// kiem tra so chan
$a = 10;
if ($a % 2 == 0) {
	echo "{$a} la so chan";
}

#IF ELSE
// kiem tra chan le
$b = 11;
if ($b % 2 == 0) {
	echo "{$b} la so chan";
} else {
	echo "{$b} la so le";
}

#IF ELSE IF ELSE
$point = 8;

if ($point < 4) {
	echo "F";
} elseif ($point < 5.5) {
	echo "D";
} elseif ($point < 7) {
	echo "C";
} elseif ($point < 8.5) {
	echo "B";
} else {
	echo "A";
}

# Cấu trúc điều kiện lồng nhau
$point = -5;
if ($point >= 0 && $point < 10) {
	if ($point < 4) {
		echo "F";
	} elseif ($point < 5.5) {
		echo "D";
	} elseif ($point < 7) {
		echo "C";
	} elseif ($point < 8.5) {
		echo "B";
	} else {
		echo "A";
	}
} else {
	echo "du lieu ban nhap khong lop le";
}
