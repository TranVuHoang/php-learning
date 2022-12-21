<?php 
	function show_array($data) {
		if(is_array($data)) {
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
	}
	//show_array($_SERVER);

	
	//Kiểm tra dữ liệu form(đã submit form chưa)
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST['username'];
		$password = $_REQUEST['password'];

		echo "{$username} - {$password}";
	}
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 67: Truyền dữ liệu form phương thức POST </title>
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