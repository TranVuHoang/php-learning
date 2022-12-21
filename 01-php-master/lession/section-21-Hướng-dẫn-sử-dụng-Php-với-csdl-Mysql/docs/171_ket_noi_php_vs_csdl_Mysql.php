<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài 171 Kết nối php với csdl MySQL</title>
</head>

<body>
	<h1>Hướng dẫn sử dụng Php với cơ sở dữ liệu Mysql</h1>
	<h2>#1.Kết nối php với csdl MySQL</h2>
	<p>Sau khi kết nối thành công, có thể thao tác trực tiếp với Mysql thông qua Php</p>
	<pre>
		$conn = mysqli_connect(server, username, password, database);
	</pre>
	<a href="">Ví dụ</a><br>
	<pre>
		$conn = mysqli_connect('localhost', 'root', '', 'unitop');
			// Kiểm tra kết nối
		if(!$conn) {
			die("Kết nối thất bại". mysqli_connect_erro());
		} else {
			echo "Kết nối thành công";
		}
	</pre>
</body>

</html>