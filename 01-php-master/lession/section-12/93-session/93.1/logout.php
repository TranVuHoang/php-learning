<?php
session_start();

// xóa session( xóa phiên làm việc)
unset($_SESSION['is_login']); // hủy phiên làm việc vs is_login
unset($_SESSION['user_login']); // hủy username
unset($_SESSION['password']);
header("Location: login.php");// đẩy người dùng về lại trang đăng nhập
	// header("Location : login.php");
