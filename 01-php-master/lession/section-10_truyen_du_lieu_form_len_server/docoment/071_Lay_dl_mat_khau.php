<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 71: LẤY DỮ LIỆU MẬT KHẨU</title>
</head>
<body>
	<h1>LẤY DỮ LIỆU MẬT KHẨU</h1>
	<h3>PASSWORD LÀ GÌ?</h3>
	<p><strong>Password box:</strong> là hộp văn bản để người dùng nhập vào ký tự mật khẩu, thông tin người dùng nhập vào được ẩn không được hiển thị công khai</p>
	<h3>LẤY DỮ LIỆU MẬT KHẨU</h3>
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
	<h3>LẤY DỮ LIỆU MẬT KHẨU</h3>
	<pre>
		if(isset($_POST['password'])) {
			$password = $_POST['password'];
			echo $password;
		}

		hoặc:
		
		if($_SERVER['REQUEST_METHOD' == "POST"]) {
			$password = $_POST['password'];
			echo $password;
		}
	</pre>
</body>
</html>