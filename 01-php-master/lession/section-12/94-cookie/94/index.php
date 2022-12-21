<?php 
session_start(); // tạo session

if(isset($_COOKIE['is_login'])) {
	echo "Cookie: {$_COOKIE['user_login']}";
}
echo "</br>TRANG CHỦ <br/>";
// echo $is_login;
if(!isset($_SESSION['is_login'])){ // kiểm tra nếu biến is_login không tồn tại
	header("Location: login.php"); 
} else {// ngược lại biến is_login tồn tại
	echo $_SESSION['user_login'];
	// echo $_SESSION['password'];
}

?>
 <br>
 <a href="logout.php">Đăng xuất</a>

