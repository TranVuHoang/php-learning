<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 203: Mã hóa thông tin quan trọng</title>
</head>
<body>
	<h1>phần 24: BẢO MẬT HỆ THỐNG WEBSITE</h1>
	<h2>Tại sao cần bảo mật</h2>
	<ul>
		<li>Đảm bảo an toàn cho hệ thống</li>
		<li>Đảm bảo an toàn cho người dùng</li>
	</ul>
	<h3>#1 Mã hóa thông tin quan trọng</h3>
	<p>Những thông tin quan trọng cần được mã hóa một cách nghiêm ngặt, tránh bị lộ thông tin người dùng như mật khẩu hệ thống.</p>
	=> Hệ  mã hóa thường dùng : MD5()
	<h3>Mã hóa 1 chiều md5</h3>
	<ul>
		<li>Thông tin A được mã hóa thành B</li>
		<li>Từ B không thể giải mã thành A</li>
	</ul>
	<table border="1px solid">
		<thead>
			<tr>
				<td>A</td>
				<td>B</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>unitop</td>
				<td>ấdjwqhuqwero1241oiwjr24</td>
			</tr>
			<tr>
				<td>Phancuong2018!@#</td>
				<td>saoidfeqh2309ewoijf3845woie23</td>
			</tr>
		</tbody>
	</table>
	<h3>Thuật toán kiểm tra và mở khóa</h3>
	<a href="">Kết luận</a><br>
	Nếu B = B' => A = A'

	<pre>
		A ----md5(A)----> B
		A' ----md5(A')----> B'
	</pre>
	<h3>#2. Ngăn chặn truy cập trái phép</h3>
	<a href="">Truy cập trái phép</a><br>
	<ul>
		<li>Cố tình truy cập vào hệ thống khi chưa login</li>
		<li>Cố tình truy cập đến nơi không có quyền</li>
	</ul>
	<a href="">Ngăn chặn</a>
	<ul>
		<li>Rà soát các trường hợp người dùng truy cập thẳng vào khu vực chỉ giành cho "Vip Member" mà chưa login</li>
		<li>Kiểm tra và chỉ cho phép người dùng đến nơi được cấp quyền</li>
	</ul>
	<h3>#2. Ngăn chặn truy cập trái phép</h3>
	<a href="">Công cụ</a><br>
	<ul>
		<li>Kiểm tra session, cookie</li>
		<li>Kiểm tra dữ liệu quyền truy cập</li>
		<li>Thông báo, chuyển nhượng</li>
	</ul>
</body>
</html>