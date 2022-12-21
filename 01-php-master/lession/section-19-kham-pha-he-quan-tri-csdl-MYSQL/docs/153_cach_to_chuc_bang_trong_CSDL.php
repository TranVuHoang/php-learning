<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 152 CÁCH TỔ CHỨC BẢNG TRONG CSDL</title>
</head>
<body>
	<h1>CÁCH TỔ CHỨC BẢNG TRONG CSDL</h1>
	<h2>DATABASE</h2>
	<pre>
		USER 		POST		PRODUCT			MEDIA
		CUSTOMER	POST CAT	PRODUCT CAT		ORDER
							...
	</pre>
	<h2>CẤU TRÚC BẢNG</h2>
	<ul>
		<li>Dữ liệu lưu dạng bảng bao gồm các cột, các dòng</li>
		<li>Cột biểu thị thuộc tính của thực thể như:id, title, price</li>
		<li>Hàng biểu thị thông tin của một thực thể nào đó</li>
		<li>Giá trị nằm ở điểm giao giữa cột và hàng được gọi là ô</li>
		<li>Nếu bảng chứa một hoặc nhiều cột dùng phân biệt các hàng khác nhau được gọi là khóa chính</li>
	</ul>
	<table border="1px solid">
		<thead>
			<tr>
				<td>id</td>
				<td>username</td>
				<td>fullname</td>
				<td>email</td>
				<td>password</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>phancuong</td>
				<td>phan van cuong</td>
				<td>phancuong.qt@gmail.com</td>
				<td>d6949ac0r50wejfdjk0e</td>
			</tr>
			<tr>
				<td>2</td>
				<td>hoanguet</td>
				<td>Trần Vũ Hoàng</td>
				<td>tranvuhoangjr@gmail.com</td>
				<td>Hoang19@97</td>
			</tr>
		</tbody>
	</table>
</body>
</html>