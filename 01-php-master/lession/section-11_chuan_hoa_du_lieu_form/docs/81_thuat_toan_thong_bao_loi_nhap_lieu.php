<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 81</title>
</head>
<body>
	<h1>THUẬT TOÁN THÔNG BÁO LỖI NHẬP LIỆU</h1>
	<h3>THUẬT TOÁN ĐẶT CỜ HIỆU</h3>
	<strong>Bước 1: Phất cờ</strong><br>
	<ul>
		<li>Mặc định hệ thống có lỗi</li>
		<li>Thiết lập giá trị mặc định</li>
	</ul>
	<pre>
		$error = 1;
		$error = false;
		$error = array();
	</pre>
	<strong>Bước 2: Hạ cờ</strong> <br>
	<ul>
		<li>Hạ cờ khi xảy ra trường hợp phủ định với giả thiết bài toán</li>
		<li>Biến lưu lỗi được cập nhật giá tri 1, true</li>
		<li>Cập nhật thêm giá trị cho mảng lỗi</li>
	</ul>
	<pre>
		$error = 1;
		$error = true;
		$error['username'] = "Không được để trống trường này;
	</pre>
	<strong>Bước 3: Kết luận</strong><br>
	<ul>
		<li>Là bước kiểm tra và đưa ra kết luận về tình trạng lỗi thông qua giá trị cờ</li>
		<li>Giúp hệ thống xử lý các tình huống khác nhau</li>
		<ul>
			<li>Nếu cờ vẫn phất -> Hệ thống không lỗi -> xử lý</li>
			<li>Nếu cờ hạ -> hệ thống lỗi -> thông báo người dùng</li>
		</ul>
	</ul>
	<pre>
		if(emty($error)) {
			// Xử lý khi không có lỗi
		} else {
			// thông báo lỗi
		}
	</pre>
</body>
</html>