<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 70 Lấy dữ liệu textbox</title>
</head>
<body>
	<h1>LẤY DỮ LIỆU TEXTBOX</h1>
	
	<h3>TEXTBOX LÀ GÌ?</h3>
	<p><strong>Textbox:</strong>Là hộp văn bản để nhập các đoạn ký tự ngắn. Các ứng dụng thường thấy dùng để lấy thông tin họ tên, địa chỉ, sdt, email...</p>

	<h3>LẤY DỮ LIỆU TỪ TEXTBOX</h3>
	<a href="#">Form login</a> <br>
	<pre>
		< form action="login.php">
			< label for="username">Tên đăng nhập</label>< br>
			< input type="text" name="username" id="username">< br>
			< label for="password">Mật khẩu</label> < br>
			< input type="text" name="password" id="password">< br>
			< input type="submit" name="btn-login" value="login">
		< /form>
	</pre>
	<pre>
		<form action="login.php">
		<label for="username">Tên đăng nhập</label><br>
		<input type="text" name="username" id="username"><br>
		<label for="password">Mật khẩu</label> <br>
		<input type="text" name="password" id="password"><br>
		<input type="submit" name="btn-login" value="login">
	</form>
	</pre>
</body>
</html>