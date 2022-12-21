<?php 
/*
 * B1: Kiểm tra submit form
 * B2: Lấy dữ liệu 
 */
	if(isset($_POST['btn-login'])) {
	// if($_SERVER['REQUEST_METHOD'] == "POST") {
		
		// $password = $_POST['password'];
		// hiển thị dữ liệu của username
		if(empty($_POST['username'])) {
			echo "Không được để trống Tên đăng nhập";
		} else {
			$username = $_POST['username'];
			echo $username;
		}
		// echo "<pre>";
		// print_r($_POST);
		// echo "</pre>";
	}

 ?>
<head>
	<meta charset="UTF-8">
	<title>Bài 70: Lấy dữ liệu từ Textbox </title>
</head>
<body>
	<h1>Đăng nhập</h1>
	<!-- <pre> -->
		<form action="" method="POST">
			Username <input type="text" name="username"><br>
			Password: <input type="password" name="password"><br>
			<input type="submit" name="btn-login" value="Login">
		</form>
	<!-- </pre> -->

</body>
</html>