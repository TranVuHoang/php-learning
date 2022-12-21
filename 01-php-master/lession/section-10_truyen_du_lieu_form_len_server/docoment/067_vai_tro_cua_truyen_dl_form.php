<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 67: Vai trò của truyền dữ liệu form</title>
</head>
<body>
	<h1>Vai trò của truyền dữ liệu form</h1>
	<h3>VAI TRÒ</h3>
	<ul>
		<li>Chuyển dữ liệu người dùng lên server</li>
		<li>Giúp tương tác giữa người dùng với server</li>
		<li>Thực thi các chức năng liên quan đến dữ liệu trong website</li>
	</ul>
	<h3>ỨNG DỤNG FORM TRONG WEBSITE</h3>
	<ul>
		<li>Form đăng nhập, đăng ký tài khoản</li>
		<li>Form nhập bài viết</li>
		<li>Form nhập sản phẩm</li>
		<li>Form đặt hàng</li>
		<li>...</li>
	</ul>

	<h3>PHƯƠNG THỨC POST</h3>
	<p>Dưới đây form dùng gửi lên server 2 thông tin fullName, email lên server qua phương thức POST</p>
	
	<pre>
		< form action="login" method="POST"> 
			Name: < input type="text" name="username">< br>
			E-mail: < input type="password" name="password">< br>
			< input type="submit" name="btn-login" value="Login">
		< /form>
	</pre>
	
	<pre>
		<form action="login" method="POST">
			Name: <input type="text" name="username"><br>
			E-mail: <input type="password" name="password"><br>
			<input type="submit" name="btn-login" value="Login">
		</form>
	</pre>
	<h3>NHẬN DỮ LIỆU TỪ PHƯƠNG THỨC POST</h3>
	<ul>
		<li>Sử dụng mảng hệ thống $_POST để lấy dữ liệu truyền lên theo phương thức post</li>
		<li>Cách lấy từn phần tử trong $_POST hoàn toàn áp dụng cách làm với mảng($_POST chính là một mảng)</li>
	</ul>
	<p>Vd:</p>
	<pre>
		$userName = $_POST['userName'];
		$password = $_POST['password'];
	</pre>
	<h3>KHI NÀO SỬ DỤNG PHƯƠNG THỨC POST</h3>
	<ul>
		<li>Những thông tin truyền qua phương thức POST thì mọi người khác không thể nhìn thấy và nó không giới hạn số lượng thông tin truyền lên server</li> 
		<li>Ngoài ra POST hỗ trợ ở phương thức upload file lên server</li>
	</ul>

</body>
</html>