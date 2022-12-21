<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 72 LẤY DỮ LIỆU TỪ HIDDEN FIELD LÀ GÌ</title>
</head>
<body>
	<h1>HIDDEN FIELD LÀ GÌ?</h1>
	<p>strong Hidden Field</p>
	<ul>
		<li>Đây là kiểu nhập dữ liệu không hiển thị trên web giúp chúng ta truyền dữ liệu ngầm</li>
		<li>Chúng ta thường dùng để truyền các thông tin được điền sẵn trong các form hoặc nhận trong quá trình người dùng tương tác đến form</li>
	</ul>
	<h3>LẤY DỮ LIỆU HIDDEN FIELD</h3>
	<a href="#">Form login</a>
	<pre>
		< form action="login.php">
			< label for="username">Tên đăng nhập</label>< br>
			< input type="text" name="username" id="username">< br>
			< label for="password">Mật khẩu</label> < br>
			< input type="text" name="password" id="password">< br>
			< input type="hidden" name="redirect_to" value="home.php"> < br>
			< input type="submit" name="btn-login" value="login">
		< /form>
		<form action="login.php">
			<label for="username">Tên đăng nhập</label><br>
			<input type="text" name="username" id="username"><br>
			<label for="password">Mật khẩu</label> <br>
			<input type="password" name="password" id="password"><br>
			<input type="hidden" name="redirect_to" value="home.php"> <br>
			<input type="submit" name="btn-login" value="login">
		</form>
	</pre>
</body>
</html>