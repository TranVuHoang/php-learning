<?php

/*
2) Tính tổng chuỗi (n/n+1) 
(n>=1)
*/
$total = 0;
$i;
$n = 10;

for ($i = 1; $i <= $n; $i++) {

    $total += ($i / (1 + $i));
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính tổng các số chẵn</title>
</head>

<body>
    <h1>Tính tổng chuỗi (n/n+1) (n>=1)</h1>

    <p>Tổng chuỗi (n/n+1) từ 1 đến <?php echo $n; ?> của bạn là: <?php echo $total; ?></p>
</body>

</html>