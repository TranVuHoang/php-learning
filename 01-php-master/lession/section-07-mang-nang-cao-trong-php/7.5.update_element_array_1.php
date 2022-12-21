<?php

$info = array(
    'id'        => 1,
    'fullName'  => "Trấn Vũ Hoàng",
    "email"     => "tranvuhoangjr@gmail.com"
);
echo $info['id'];
#Xuất mảng ban đầu
print "Mảng ban đầu";
echo "<pre>";
print_r($info);
echo "</pre>";

// cập nhật mảng thay đổi value có key là fullName
$info["fullName"] = "Trần Vũ Hoàng";

#mảng sau khi được sửa
echo "Mảng được update đúng";

echo "<pre>";
print_r($info);
echo "</pre>";
