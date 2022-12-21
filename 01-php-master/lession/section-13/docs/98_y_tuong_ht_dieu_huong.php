<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 98: Ý TƯỞNG HỆ THỐNG ĐIỀU HƯỚNG</title>
</head>
<body>
	<h1>Ý TƯỞNG HỆ THỐNG ĐIỀU HƯỚNG</h1>
	<h3>TỐI ƯU DỮ LIỆU DÙNG CHUNG</h3>
	<ul>
		<li>File giao diện dùng chung</li>
		<li>Hàm dùng chung</li>
	</ul>
	<h3>CHECKLIST</h3>
	<ol>
		<li>Đẩy yêu cầu truy cập url</li>
		<pre>
			< a href="?page=contact">Liên hệ< /a>
			< a href="?page=product">Sản phảm< /a>
		</pre>
		<li>Lấy dữ liệu pae từ url</li>
		<li>Tạo đường dẫn</li>
		$path = "page/{$page}.php"
		<li>Gọi xử lý hiện tại</li>
		require($path);
	</ol>
</body>
</html>