<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 86 Kiểm tra định dạng username</title>
</head>
<body>
	<h1>KIỂM TRA ĐỊNH DẠNG USERNAME</h1>
	<h3>Cấu trúc username</h3>
	<ul>
		<li>Chứa các ký tự A-Z, a-z, 0-9 và dấu gạch dưới</li>
		<li>Độ dài 6-32 ký tự</li>
	</ul>
	<a href="">Biểu thức mẫu</a><br>
	/^[A-Za-z0-9_\.]{6, 32}$/

	<h3>Kiểm tra định dạng username</h3>
	<pre>
		< ?php 
			$partten = "/^[A-Za-z0-9_\.]{6, 32}$/";
			$subject = "hoangtran";
			if(!preg_match($partten, $subject, $matchs))
				echo 'username bạn vừa nhâp không đúng định dạng';
		 ? >
	</pre>
	<pre>
		<?php 
			$partten = "/^[A-Za-z0-9_\.]{6, 32}$/";
			$subject = "hoangtran";
			if(!preg_match($partten, $subject, $matchs))
				echo 'username bạn vừa nhâp không đúng định dạng';
		 ?>
	</pre>
</body>
</html>