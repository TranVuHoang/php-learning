<?php

/**
 * Nhúng mảng PHP vào html
 * 1. Nhúng mảng 1 chiều PHP vào HTML
 * 2. Nhúng mảng đa chiều PHP vào <HTML></HTML>
 */

#1. Mảng đã xử lý
// Mảng 1 chiều các số nguyên tố
$list_prime = array(2, 3, 5, 7);
$list_prime = [2, 3, 5, 6];

// Mảng đa chiều ban đầu
$list_users = array(
    1 => array(
        "id"        => "1000",
        "fullName"  => "Phan Văn Cương",
        "email"     => "phancuong.qt@gmail.com"
    ),
    2 => array(
        "id"        => "1280",
        "fullName"  => "Nguyễn Hoàng Anh",
        "email"     => "hoanganh@gmail.com"
    )
);
$list_users[3] = array(
    "id"        => "1357",
    "fullName"  => "Hoang Tran",
    "email"     => "hoang.tran@viajsc.local"
);
function show_array($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
/*
 * Bước 1 Chuẩn bị mảng đã xử lý;
 * Bước 2 Tạo cấu trúc HTML mẫu
 * Bước 3 Duyệt mảng
 * Bước 4 Đổ dữ liệu
 */

?>

<!-- Cấu trúc html mẫu -->
<html>

<head>
    <title>Xuất dữ liệu mảng PHP lên HTML</title>
    <style>
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <h1>Xuất dữ liệu mảng PHP lên HTML</h1>
    <hr />
    <h3>Danh sách số nguyên tố</h3>
    <table border="2">
        <thead>
            <tr>
                <th align="center" width="50">STT</th>
                <th align="center" width="200">Số nguyên tố</th>
            </tr>
        </thead>
        <tbody>
            <!-- duyêt mảng -->
            <?php
            $i = 0;
            foreach ($list_prime as $value) {
                $i++;
            ?>
                <tr>
                    <td align="center"><?php echo $i ?></td>
                    <td align="center"><?php echo $value ?></td>
                </tr>
            <?php
            } ?>

        </tbody>
    </table>
    <h3>Danh sách thành viên</h3>
    <table border="2">
        <thead>
            <tr>
                <th align="center" width="50">STT</th>
                <th align="center" width="50">Id</th>
                <th align="center" width="200">Họ và tên</th>
                <th align="center" width="50">Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = 0;
            foreach ($list_users as $user) {
                $temp++;
                // show_array($user);
            ?>
                <tr>
                    <td align="center"><?php echo $temp ?></td>
                    <td align="center"><?php echo $user["id"] ?></td>
                    <td align="center"><?php echo $user["fullName"] ?></td>
                    <td align="center"><?php echo $user["email"] ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>

    <!-- practice 23/12/2022 -->
    <h4>Danh sách thành viên 23/12/2022</h4>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>ID</th>
                <th width="200px">FullName</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 0;
            foreach ($list_users as $item) {
                $index++;
            ?>
                <tr>
                    <td align="center"><?php echo $index; ?></td>
                    <td align="center"><?php echo $item["id"]; ?></td>
                    <td align="center"><?php echo $item["fullName"]; ?></td>
                    <td align="center"><?php echo $item["email"]; ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>