<?php
ob_start(); // ham de chay hàm header("Location")

/**
 * Thiet lap khi login thanh cong, Bien is_login:
 * Tac dung khi nguoi dung login thanh cong -> day ra trang index.php
 */

$isLogin = true;

header("Location: 93-index.php");
