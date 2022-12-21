<?php
// Khai báo mảng
$info = array(
    'id' => 1,
    'fullName' => "Trần Vũ Hoàng",
    "email" => "tranvuhoangjr@gmail.com"
);
//mảng ban đầu
print "Mảng ban đầu";
echo "<pre>";
print_r($info);
echo "</pre>" . "<hr>";

# thêm phần tử có key xác định cho mảng
$info["phone"] = "0978688190";

//Mảng sau khi được thêm phần tử
echo "Mảng sau khi được thêm:";
echo "<pre>";
print_r($info);
echo "</pre>" . "<hr/>";

#Thêm phần tử có key mặc định
$list_prime = array(2, 3, 5, 7);
echo "Mảng ban đầu";
echo "<pre>";
print_r($list_prime);
echo "</pre>" . "<hr/>";

$list_prime[] = 11;
echo "Mảng sau khi được thêm:";
echo "<pre>";
print_r($list_prime);
echo "</pre>";
