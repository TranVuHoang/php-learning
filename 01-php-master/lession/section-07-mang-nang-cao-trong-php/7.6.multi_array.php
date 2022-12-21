<?php

/**
 * Thực hàng với mảng đa chiều trong PHP
 * và các thao tác với mảng đa chiều: thêm, sửa, xóa
 */

// Tạo mảng đa chiều
$list_users = array(
      1 => array(
            'id'          => 1,
            "fullName"    => "Trần Vũ Hoàng",
            "email"       => "tranvuhoangjr@gmail.com"
      ),
      2 => array(
            'id'          => 2,
            "fullName"    => "Nguyễn Văn A",
            "email"       => "nguyenvana@gmail.com"
      )
);

// Xuất mảng ban đầu
echo "Mảng đa chiều ban đầu <hr/> <pre>";
print_r($list_users);
echo "</pre>";

/*
 * Thêm phần tử
 * id = 3
 * fullName : Lam Trường
 * email: lamtruong@gmail.com
 */

//  Cách 1 thêm phần tử vào mảng đa chiều(nên dùng)
$list_users[3] = array(
      'id'          => 3,
      "fullName"    => "Lam Trường",
      "email"       => "lamtruong@gmail.com"
);
// Cách 2 thêm phần tử vào mảng đa chiều
$list_users[3]['id'] = 031;
$list_users[3]["fullName"] = "Lam Trường";
$list_users[3]["email"] = 'tester@gmail.com';

echo "<hr/>";
echo "Mảng sau khi được thêm";
echo "<pre>";
print_r($list_users);
echo "</pre>";

/**Lấy thông tin của phần tử vừa thêm vào mảng */
echo "<hr/>";
echo "Lấy tất cả thông tin của phần tử vừa thêm vào mảng";

echo "<pre>";
print_r($list_users[3]);
echo "</pre>";

// lấy id của mảng
echo "Lấy id của phần tử vừa thêm vào mảng";
echo "<pre>";
print_r($list_users[3]['email']);
echo "</pre>";

echo "<hr/>";
// Tạo(khai báo) mảng đa chiều
$listUsers = array(
      1 => array(
            "id"        => 1,
            "fullName"  => "Sơn Đặng",
            "email"     => "sondang@gmail.com"
      ),
      2 => array(
            "id"        => 2,
            "fullName"  => "Huykira",
            "email"     => "huykira@gmail.com"
      )
);
// xuất mảng đa chiều
echo "<pre>";
print_r($listUsers);
echo "</pre>";

// Thêm phần tử cho mảng đa chiều
#Cách 1
$listUsers[3] = array(
      "id" => 3,
      "fullName" => "Hoàng Trần",
      "email"     => "tranvuhoangjr@gmail.com"
);
#Cách 2
$listUsers[4]["id"] = 4;
$listUsers[4]["fullName"] = "Hậu Nguyễn";
$listUsers[4]["email"] = "haunguyen@gmail.com";

// Xuất mảng đa chiều sau khi được thêm
echo "<hr/>";
echo "<pre>";
print_r($listUsers);
echo "</pre>";

// xuất ra email có key = 3
echo $listUsers[3]["email"];
