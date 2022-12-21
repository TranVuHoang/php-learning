<?php
ob_start();
session_start();

$_SESSION['is_login'] = true; // thiết lập giá trị session cho biến is_login
$_SESSION['user_login'] = 'unitop';

header("Location: index.php");
