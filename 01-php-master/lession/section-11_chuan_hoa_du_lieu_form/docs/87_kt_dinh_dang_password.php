<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 87</title>
</head>
<body>
	<h1>Kiểm tra định dạng mật khẩu</h1>
	<h3>Cấu trúc mật khẩu</h3>
	<ul>
		<li>Các ký tự chữ hoa, thường, sô, ký tự đặc biệt, dấu chấm</li>
		<li>Bắt đầu với ký tự in hoa</li>
		<li>có 6-32 ký tự</li>
	</ul>
	<a href="">Biểu thức mẫu:</a>
	/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/
	<h3>KIỂM TRA ĐỊNH DẠNG MẬT KHẨU</h3>
	<pre>
		<?php 
			$partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
			$subject = "unitop!@#"; //password
			if(!preg_match($partten, $subject, $matchs))
				echo "Mật khẩu bạn vừa nhập không đúng định dạng";
		 ?>
	</pre>
</body>
</html>!	