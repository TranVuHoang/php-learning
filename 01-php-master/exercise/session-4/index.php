<?php 
#bai tap 1
// tao bien luu tru danh sach thanh vien

$list_user = array();

$listUser = array();

#bai tap 2
// tao bien luu tru danh sach san pham

$list_product = array();
$listProdcut = array();

#bai tap 3
// Xuat thông tin 
// Toi la Hoang, sinh nam 1997, can nang 50kg
$name = "Hoang";
$birthday = 1997;
$age = 23;
$weight = 50;
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Bài tập phần 4</title>
 </head>
 <body>
 	<p>Tôi là <strong><?php echo $name ?></strong>, sinh năm <strong><?php echo $birthday ?></strong>, cân nặng <strong><?php echo $weight ?></strong> kg</p>
 </body>
 </html>