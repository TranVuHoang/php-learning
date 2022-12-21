<?php

/**
 * Bài thực hành 3
 */

$fullName = "Trần Vũ Hoàng";
$userName = "Hoàng Trần";
$email = "tranvuhoangjr@gmail.com";

?>
<html>

<head>
    <title>info people</title>

</head>

<body>
    <form>
        Họ và tên: <?php echo "<b> $fullName </b>"; ?></br>
        Username: <?php echo "<b> $userName </b>" . "</br>"; ?>
        Email: <?php echo "<strong> $email </strong>"; ?>
    </form>
</body>

</html>