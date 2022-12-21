<?php
// khởi tạo mảng ban đầu
$info = array(
    'id'        => 1,
    'fullName'  => "Trần Vũ Hoàng",
    "email"     => "tranvuhoangjr@gmail.com"
);
# cách 1 lấy trực tiếp value của mảng
echo $info['fullName'] . "<br>";

#cách 2 gán value của mảng vào 1 biến để sau này đổ dữ liệu lên php
$fullName   = $info["fullName"];
$id         = $info['id'];
$email      = $info["email"];
echo $fullName;

$list_prime = array(2, 3, 5, 7);
// Lấy số nguyên tố đầu tiên
echo $list_prime[0];
//Lấy số 3
echo $list_prime[1];
?>

<html>

<head>
    <title>Lấy dữ liệu</title>
</head>

<body>
    <p>Id: <strong><?php echo $id; ?></strong></p>
    <p>Họ và tên: <strong><?php echo $fullName; ?></strong></p>
    <p>Email: <strong><?php echo $email; ?></strong></p>
</body>

</html>