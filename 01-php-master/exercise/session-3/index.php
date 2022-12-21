<?php
/*
 * Bước 1: Xây dựng giao diện
 * Bước 2: Chuẩn bị dữ liệu => Tạo biến
 * Bước 3: Đổ dữ liệu php lên html
 */
$fullName = "Trần Vũ Hoàng";
$userName = "HoàngIT";
$email = "tranvuhoangjr@gmail.com";
?>
<html>

<head>
    <title>Bài Tập Phần 3</title>
</head>

<body>
    <h1>Thông tin cá nhân</h1>
    <p>Họ và tên: <strong><?php echo $fullName ?></strong></p>
    <p>Username: <strong><?php echo $userName ?></strong></p>
    <p>email: <strong><?php echo $email ?></strong></p>
</body>

</html>