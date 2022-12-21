<?php
if (isset($_POST['btn-login'])) {
	// đặt cờ hiệu, tạo biến $errors lưu mảng rỗng
	$errors = array();

	if (empty($_POST['username'])) {
		$errors['username'] = "Không được để trống trường username"; // hạ cờ
	} else {
		$username = $_POST['username'];
	}

	if (empty($_POST['password'])) {
		$errors['password'] = "Không được để trống trường password"; // hạ cờ
	} else {
		$password = $_POST['password'];
	}

	// kết luận
	if (empty($errors)) {
		// xử lý không có lỗi
		echo "Username = {$username} <br/> Password = {$password}";
	}
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài 83: Chuẩn hóa dữ liệu Form đăng nhập</title>
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
		<p class="errors">
			<?php
			if (!empty($errors['username']))
				echo $errors['username'];
			?>
		</p>
		<label for="password">Password</label><br>
		<input type="text" name="password" id="password"><br>
		<p class="errors">
			<?php
			if (!empty($errors['password']))
				echo $errors['password'];
			?>
		</p>
		<input type="submit" name="btn-login" value="Login">
	</form>
</body>

</html>