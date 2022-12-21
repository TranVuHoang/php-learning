<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 84: Ghi nhận dữ liệu sau khi submit</title>
</head>
<body>
	<h1>GHI NHẬN GIỮ LIỆU SAU KHI SUBMIT</h1>
	<h3>Ý NGHĨA</h3>
	<ul>
		<li>Ghi nhận dữ liệu ở lần submit trước</li>
		<li>Tránh nhập lại những dữ liệu đã nhập chuẩn</li>
		<li>phục vụ cho quá trình hoàn thiện nhập liệu tiện lợi</li>
		<li>Tiết kiệm thời gian</li>
	</ul>
	<h3>CÁCH XỬ LÝ</h3>
	<a href="">Xử lý PHP</a><br>
	$username = $_POST['username'];<br>

	<a href="">Xử lý trên HTML</a><br>
	<pre>
		< input type="text" name="username" value="< ?php if(!empty($username)) echo $username; ?>">
	</pre>
	<input type="text" name="username" value="<?php if(!empty($username)) echo $username; ?>">
</body>
</html>