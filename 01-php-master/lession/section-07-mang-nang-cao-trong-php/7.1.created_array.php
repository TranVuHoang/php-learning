<?php

#tạo mảng rỗng
$error = array();
// xuất mảng error
echo "Mảng ban đầu: <br>";
print_r($error);
echo "<hr/>";

// thêm thuộc tính userName cho mảng error
$error['userName'] = "Bạn không được để trống trường này!";

echo "Mảng sau khi được thêm thuộc tính userName: <br>";
echo "<pre>";
print_r($error);
echo "</pre>";
echo "<hr/>";

// Tạo mảng với key mặc định
$list_odd = array(1, 3, 5);
echo "<pre>";
print_r($list_odd);
echo "</pre>" . "<hr>";

$list_odd = array(1 => 1, 3, 5);
echo "<pre>";
print_r($list_odd);
echo "</pre>" . "<hr>";

$list_odd = array(1, "3" => 3, 5);
echo "<pre>";
print_r($list_odd);
echo "</pre>" . "<hr>";

// Tạo mảng với key & value xác định
// User: Họ tên, email, id
$info = array(
    'id' => 1,
    'fullName' => "Trần Vũ Hoàng",
    "email" => "tranvuhoangjr@gmail.com"
);
echo "<pre>";
print_r($info);
echo "<pre>";
