<?php

/*
2) Tính tổng các số nghịch đảo chia hết cho 3 từ 3 đến n (n>=3)
*/
$total = 0;
$i;
$n = 10;

for ($i = 3; $i <= $n; $i++) {
    if ($i % 3 == 0) {
        $total += (1 / $i);
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
    <h1>Tổng các số nghịch đảo chia hết cho 3 từ 3 đến n (n>=3)</h1>

    <p>Tổng các số nghịch đảo từ 3 đến <?php echo $n; ?> của bạn là: <?php echo $total; ?></p>
</body>

</html>