<?php 
if(isset($_POST['btn-login'])) {
	// đặt cờ hiệu
	$error = array(); //mảng lưu rỗng
	if(empty($_POST['username'])) {
		$error['username'] = "Không được để trống trường username"; // hạ cờ
	} else {
		if(!( strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32))
			$error['username'] = "Username yêu cầu từ 6-32 ký tự";
		else {
			$partten = "/^[A-Za-z0-9_\.]{6,32}$/";
			if(!preg_match($partten, $_POST['username'], $matchs))
				$error['username']= 'username cho phép sử dụng chuỗi ký tự, chữ số, dấu chấm, dấu gạch dưới, từ 6-32 ký tự.';
			else {
				$username = $_POST['username'];
				echo $username;
			}
		}
			
	}
	if(empty($_POST['password'])) {
		$error['password'] = "Không được để trống trường password"; // hạ cờ
	} else {
		$partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
		if(!preg_match($partten, $_POST['password'], $matchs))
				$error['password']= 'password sử dụng chữ cái, chữ số, và ký tự đặc biệt, bắt đầu bởi ký tự viết hoa và có 6-32 ký tự';
			else {
				$password = $_POST['password'];
				echo $password;
			}
	}

	// kết luận
	if(empty($error)) {
		// xử lý không có lỗi
		echo "Username = {$username} <br/> Password = {$password}";
	} 
}
 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 86: Chuẩn hóa dữ liệu Form đăng nhập</title>
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
		<input type="text" name="username" id="username"><br>
		<p class="error">
			<?php 
				if(!empty($error['username'])) 
					echo $error['username'];
			?>	
		</p>
		<label for="password">Password</label><br>
		<input type="text" name="password" id="password"><br>
		<p class="error">
			<?php 
				if(!empty($error['password'])) 
					echo $error['password'];
			?>	
		</p>
		<input type="submit" name="btn-login" value="Login">
	</form>
</body>
</html>