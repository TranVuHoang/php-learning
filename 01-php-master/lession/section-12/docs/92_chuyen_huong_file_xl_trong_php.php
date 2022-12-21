<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 92 Chuyển hướng file xử lý trong PHP</title>
</head>
<body>
	<h1>Chuyển hướng file xử lý trong PHP</h1>
	<h2>Lợi ích</h2>
	<ul>
		<li>Giúp rẽ nhánh xử lý đến file cần thiết</li>

		<li>Tạo sự link hoạt xử lý trong hệ thống</li>
	</ul>
	<h2>Câu lệnh</h2>
	<pre>
		header("Location: http://www.example.com/");
		header("Location: ?page=product");
	</pre>
	<ul>
		<li>Đường dẫn có thẻ tuyệt đối hoặc tương đối</li>
		<li>Cần chạy hàm ob_start() trước khi gọi câu lệnh chuyển hướng</li>
	</ul>
</body>
</html>