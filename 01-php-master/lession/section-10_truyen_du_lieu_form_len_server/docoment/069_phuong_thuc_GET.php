<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 69: Phương thức truyền dữ liệu GET</title>
</head>
<body>
	<h1>PHƯƠNG THỨC TRUYỀN DỮ LIỆU GET</h1>
	<h3>PHƯƠNG THỨC GET</h3>
	<p>Dưới đây là form dùng gửi lên server thông tin của form search</p>
	<pre>
		< form action="search.php" method="GET">
			Tìm Kiếm: < input type="text" name="search"> < br>
			< input type="submit" name="btn-seach" value="Search">
		< /form>
	</pre>
	<pre>
		<form action="search.php" method="GET">
			Tìm Kiếm: <input type="text" name="search"> <br>
			<input type="submit" name="btn-seach" value="Search">
		</form>
	</pre>
	<h3>NHẬN DỮ LIỆU URL QUA PHƯƠNG THỨC GET</h3>
	http://localhost/domain.com/?mod=product$act=detail&id=1268
	<ul>
		<li>Chuỗi các tham số bắt đầu sau dấu ? và các cặp thông tin ở dạng key=value và kết nối với nhau bởi ký tự &</li>
		<li>Đây là một ứng dụng rất hay của $_GET giúp chúng ta xây dựng và lấy dữ liệu từ URL</li>
	</ul>
	<h3>LẤY DỮ LIỆU URL QUA PHƯƠNG THỨC GET</h3>
	http://localhost/domain/mod=product&act=detail&id=1268
	<pre>
		$mod = $_GET['mod'];
		$act = $_GET['act'];
		$id = $_GET['id'];
	</pre>
	<h3>KHI NÀO SỬ DỤNG PHƯƠNG THỨC GET</h3>
	<ul>
		<li>Khi sử dụng phương thức GET dữ liệu truyền lên server được public mọi người đều nhìn thấy, những biến truyền lên server được hiển thị ngay trên url</li>
		<li>Đối với phương thức GET số lượng thông tin gửi được giới hạn(2000 ký tự)</li>
		<li>Những thông tin được truyền trên url có tác dụng cho bookmark, tốt cho SEO web</li>
	</ul>
</body>
</html>