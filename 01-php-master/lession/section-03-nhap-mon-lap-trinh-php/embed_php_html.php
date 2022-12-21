<?php
//========================
//Xuất dữ liệu trong PHP
//========================

//TH1 Xuất dữ liệu echo
echo "Học php tại unitop.vn </br>";
$a = 100;
echo "Giá trị của a= {$a}";

#TH2 Xuất dữ liệu kiểu print_r
echo '<pre>';
$my_array = array('A', 'B', "C");
echo "<pre>";

print_r($my_array);
?>

<html>

<head>
    <title>Cú pháp viến php</title>
    <style>
        h1 {
            color: blue;
        }
    </style>
</head>

<body>
    <h1>Xin chào tôi là <?php echo "Trần Vũ Hoàng"; ?> </h1>
</body>

</html>