<?php

/*
1) Tính tổng các số chẳn từ 1 dến n
*/
$total = 0;
$i;
$n = 50;

for ($i = 1; $i <= $n; $i++) {
    if ($i % 2 == 0) {
        $total += $i;
    }
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
    <h1>Tổng các số chẵn từ 1 đến N (N>=2)</h1>

    <p>Tổng các số chẵn từ 1 đến <?php echo $n; ?> của bạn là: <?php echo $total; ?></p>
</body>

</html>