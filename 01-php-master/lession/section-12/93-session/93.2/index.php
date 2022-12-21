<?php
session_start();
echo "TRANG CHỦ<br>";

if (!isset($_SESSION['is_login'])) { // nếu chưa tồn tại session thì:
	header("Location: login.php"); // -> đẩy vào login.php
} else { // ngược lại tồn tại session thì:
	echo $_SESSION['user_login']; // -> đưa ra thông tin user_login
}

/**
 * Đi vào index.php
 * - đâu tiên chưa tồn tại is_login
 * -> chuyển sang login.php
 * - tại login.php ta đã thiết lập giá trị session cho is_login
 * 		- sau khi thiết lập xong thì chuyển hướng lại index.php
 * 
 */