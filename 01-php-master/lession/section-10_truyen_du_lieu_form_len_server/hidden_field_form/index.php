<?php 
	function show_array($data) {
		echo "<pre>";
		print_r($data);
		echo "</pre>";
	}
/*
 * B1: Kiểm tra submit form
 * B2: Lấy dữ liệu 
 */
	if(isset($_POST['btn-login'])) {
		$error = array();
		if(empty($_POST['username'])) {
			$error['username'] = "Không được để trống Tên đăng nhập";
		} else {
			$username = $_POST['username'];
			echo $username;
		}
		if(empty($_POST['password'])) {
			$error['password'] = "Không được để trống Mật khẩu";
		} else {
			$password = $_POST['password'];
			echo $password;
		}
		$info_user = array(
			'username' => 'admin',
			'password' => '123456@'
		);

		// b3: kiểm tra login
		if(empty($error)) {  // Dữ liệu đã nhập
			if($username == $info_user['username'] && $password == $info_user['password']) {
				$redirect_to = $_POST['redirect_to'];
				echo $redirect_to;
			} else {
				$error['login'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
			} 
		} else {
				show_array($error);
			}
	}
	/*
	 * B1 Kiểm tra dữ liệu
	 * B2 Gán dữ liệu
	 * B3 Kiểm tra login
	 * B4 Xử lý login
	 * --- Chuyển hướng card.php
	 * --- Thông báo: Lỗi đăng nhập
	 */


 ?>
<head>
	<meta charset="UTF-8">
	<title>Bài 72: Lấy dữ liệu từ Hidden Field </title>
</head>
<body>
	<h1>Đăng nhập</h1>
	<!-- <pre> -->
		<form action="" method="POST">
			Username <input type="text" name="username"><br>
			Password: <input type="password" name="password"><br>
			<input type="hidden" name="redirect_to" value="home.php">
			<input type="submit" name="btn-login" value="Login">
		</form>
	<!-- </pre> -->

</body>
</html>