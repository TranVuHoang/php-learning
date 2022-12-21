<?php
// $is_login = true;
require "lib/url.php";
ob_start();
session_start(); // tạo session(phiên làm việc)

if (isset($_POST['btn-login'])) {
	// đặt cờ hiệu
	$error = array(); //mảng lưu rỗng
	if (empty($_POST['username'])) {
		$error['username'] = "Không được để trống trường username"; // hạ cờ
	} else {
		if (!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32))
			$error['username'] = "Username yêu cầu từ 6-32 ký tự";
		else {
			// $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
			$partten = "/^[A-Za-z0-9_\.]{6,32}$/";
			if (!preg_match($partten, $_POST['username'], $matchs))
				$error['username'] = 'username cho phép sử dụng chuỗi ký tự, chữ số, dấu chấm, dấu gạch dưới, từ 6-32 ký tự.';
		}
	}
	
	if (empty($_POST['password'])) {
		$error['password'] = "Không được để trống trường password"; // hạ cờ
	} else {
		$partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
		if (!preg_match($partten, $_POST['password'], $matchs))
			$error['password'] = 'password sử dụng chữ cái, chữ số, và ký tự đặc biệt, bắt đầu bởi ký tự viết hoa và có 6-32 ký tự';
	}

	// kết luận
	if (empty($error)) {
		// $username = "";
		$data = array(
			'username' => "0978688190",
			'password' => "Admin!@#"
		);
		if (($_POST['username'] == $data['username']) && ($_POST['password'] == $data['password'])) {
			if (isset($_POST['remember_me'])) { // nếu biến remember tồn tại trên hệ thống
				setcookie('is_login', true, time() + 3600);
				setcookie('user_login', '0978688190', time() + 3600);
			}
			// cấp cho phiên làm việc khi người dùng đăng nhập đúng
			$_SESSION['is_login'] = true;
			$_SESSION['user_login'] = 'unitop';
			// header("Location: index.php");
			redirect_to("logout.php");
		} else {
			echo "Thông tin tài khoản không tồn tại trên hệ thống";
		}
		// xử lý không có lỗi
		// echo "Username = {$username} - Password = {$password}";
	}
}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài 94: Lưu trữ thông tin phiên làm việc bằng Cookie</title>
	<style>
		p {
			color: red;
		}
	</style>
</head>

<body>
	<h1>Đăng nhập</h1>
	<form action="" method="POST">
		<label for="username">Username</label><br>
		<input type="text" name="username" id="username"> <br>
		<p class="error">
			<?php
			if (!empty($error['username']))
				echo $error['username'];
			?>
		</p>
		<label for="password">Password</label><br>
		<input type="password" name="password" id="password" placeholder="Password" value=""><br>
		<p class="error">
			<?php
			if (!empty($error['password']))
				echo $error['password'];
			?>
		</p>
		<input type="checkbox" name="remember_me" id="remember_me">
		<label for="remember_me">Ghi nhớ đăng nhập</label><br>
		<input type="submit" name="btn-login" value="Login">
	</form>
</body>

</html>