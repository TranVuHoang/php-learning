<?php

/**
 * Duyệt mảng
 * 1. Duyệt mảng 1 chiều
 * 2. Duyệt mảng đa chiều
 */

#1. Duyệt mảng một chiều
$list_prime = array(1, 2, 3, 4);
$list_prime = [1, 2, 3, 4];

// Xuất ra cấu trúc mảng ban đầu
echo "In ra mảng 1 chiều ban đầu <hr/> <pre>";
print_r($list_prime);
echo "</pre>";

// Duyệt mảng 1 chiều và tính tổng các phần tử trong mảng
$sum = 0;
foreach ($list_prime as $value) {
    echo $value . " ";
    $sum += $value;
}
print "<br>" . "Tổng = " . $sum;

#2. Duyệt mảng đa chiều
$list_users = array(
    1 => array(
        "id"        => 1,
        "fullName"  => "Trần Vũ Hoàng",
        "email"     => "tranvuhoangjr@gmail.com"
    ),
    2 => array(
        "id"        => 2,
        "fullName"  => "Trần Vũ Hoàng",
        "email"     => "tranvuhoangjr@gmail.com"
    )
);
echo "<br/>Mảng đa chiều ban đầu";
echo "<hr/> <pre>";
print_r($list_users);
echo '</pre>';

// duyệt mảng đa chiều
echo "<h3>Duyệt mảng đa chiều <hr/></h3>";
foreach ($list_users as $item) {
    echo "<pre>";
    print_r($item);
    echo "</pre>";
}

echo "<h4>Xuất ra id, fullName, gmail theo chiều dọc </h4> <hr/>";
foreach ($list_users as $item) {
    echo $item["id"] . "<br>";
    echo $item["fullName"] . "<br>";
    echo $item["email"] . "<br>";
    echo "<hr/>";
}

echo "practice: 22/11/2022 <hr/>";
# tính tổng các phần tử trong mảng cho trước
$list_odd = array(1, 3, 5, 7, 9);
echo "mảng ban đầu:";
echo "<pre>";
print_r($list_odd);
echo "</pre>";

// Duyệt mảng 1 chiều
echo "duyệt mảng ban đầu: <hr/>";
foreach ($list_odd as $value) {
    echo "$value ";
}

// tính tổng các phần tử trong mảng
$sum = 0;
foreach ($list_odd as $value) {
    $sum += $value;
}
echo '<hr/> Tổng các phần tử trong mảng: ' . $sum;
