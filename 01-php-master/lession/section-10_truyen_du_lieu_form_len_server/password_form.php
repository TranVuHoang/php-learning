<?php
// Hiển thị dữ liệu user
if (isset($_POST['btn-login'])) {
	// hiển thị username
	// if(empty($_POST['username'])) {
	// 	echo "Không được để trống Tên đăng nhập";
	// } else {
	// 	$username = $_POST['username'];
	// 	echo $username."<br/>";
	// }
	// hiển thị mật khẩu
	// if(empty($_POST['password'])) {
	// 	echo "Không được để trống mật khẩu";
	// } else {
	// 	$password = $_POST['password'];
	// 	echo $password."<br/>";
	// }
	if (!empty($_POST['username'])) {
		if (!empty($_POST['password'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
			echo $username . "-" . $password;
		} else {
			echo 'Không được để trống Tên đăng nhập';
		}
	} else {
		echo "Không được để trống mật khẩu";
	}
}

?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài 71: Truyền dữ liệu form phương thức POST </title>
</head>

<body>
	<h1>Đăng nhập</h1>
	<!-- <pre> -->
	<form action="" method="POST">
		Name: <input type="text" name="username"><br>
		Password: <input type="password" name="password"><br>
		<input type="submit" name="btn-login" value="Login">
	</form>
	<!-- </pre> -->

</body>

</html>