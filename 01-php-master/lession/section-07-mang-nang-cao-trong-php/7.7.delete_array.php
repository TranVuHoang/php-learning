<?php

/**
 * Xóa phần tử của mảng đa chiều
 * Xóa toàn bộ mảng
 * Xóa thành phần trong mảng
 */

#1. khởi tạo 1 mảng đa chiều
$list_users = array(
    0 => array(
        'id' => 1,
        'fullName' => 'Nguyễn Quang Hải',
        'gmail' => 'quanghai@gmail.com'
    ),
    1 => array(
        'id' => 2,
        'fullName' => 'Nguyễn Hoàng Đức',
        'gmail' => 'hoangduc@gmail.com'
    )
);
#2. Xuất mảng đa chiều
echo "mảng ban đầu <hr/>";
echo "<pre>";
print_r($list_users);
echo "</pre>";

#3. Xóa gmail của Nguyễn Hoàng Đức
unset($list_users[1]['gmail']);

// thông tin sau khi bị xóa
echo "Mảng sau khi xóa gmail <hr/>";
echo "<pre>";
print_r($list_users[1]);
echo "</pre>";

#4. Xóa toàn bộ mảng ban đầu
unset($list_users);

echo "mảng sau khị bị xóa hết <hr/>";
echo "<pre>";
print_r($list_users);
echo "</pre>";
