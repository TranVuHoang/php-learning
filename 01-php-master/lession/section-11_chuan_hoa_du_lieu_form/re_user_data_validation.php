<?php 
if(isset($_POST['btn-reg'])) {
	// đặt cờ hiệu
	$error = array(); //mảng lưu rỗng
	if(empty($_POST['gender'])) {
		$error['gender'] = "Bạn cần chọn giới tính"; // hạ cờ
	} else {
		$gender = $_POST['gender'];
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
	<title>Bài 83: Chuẩn hóa dữ liệu Form đăng nhập</title>
	<style>
		p {
			color: red;
		}
	</style>
</head>
<body>
	<h1>Đăng ký</h1>
	<form action="" method="POST">
		<label for="">Giới tính</label>
		<select name="gender" id="">
			<option value="">---Chọn---</option>
			<option value="male">Nam</option>
			<option value="female">Nữ</option>
		</select>
		<?php 
			if(!empty($error['gender']))
				echo"<p>$error['gender'] </p> "; 
		?>
		<input type="submit" name="btn-reg" value="Register">
	</form>
</body>
</html>