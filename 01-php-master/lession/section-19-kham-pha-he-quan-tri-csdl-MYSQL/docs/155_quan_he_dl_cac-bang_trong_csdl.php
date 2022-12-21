<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 155:</title>
</head>
<body>
	<h1>QUAN HỆ DỮ LIỆU CÁC BẢNG TRONG CSDL</h1>
	<h2>Tại sao có mối quan hệ</h2>
	<ul>
		<li>Bài viết của ai tạo ra?</li>
		<li>Sản phẩm thuộc danh mục nào?</li>
		<li>Đơn hàng này của khách hàng nào?</li>
	</ul>
	<h2>Quan hệ dữ liệu bảng</h2>
	<ul>
		<li>Bảng trong CSDL quan hệ có thể liên kết với bảng khác thông qua một hoặc một số cột</li>
		<li>Các hình thức quan hệ</li>
		<ul>
			<li>Một - một</li>
			<li>Một - nhiều</li>
			<li>Nhiều - Nhiều</li>
		</ul>
		
	</ul>
	<h2>MỐI QUAN HỆ 1-1</h2>
	<ul>
			<li>Cần lưu thêm một thông tin mới cho đối tượng</li>
			<li>Tạo thêm một trường trong bảng</li>
			==> Trường hợp đơn giản
	</ul>
	<a href="">Ví dụ:</a> Cần lưu thêm ngày sinh của thành viên
	<h2>GIẢI PHÁP LƯU TRỮ</h2>
	<ul>
		<li>Thêm một trường thông tin vào bảng</li>
	</ul>
	tbl_users
	<table border="1px  solid">
		<thead>
			<tr>
				<td>id</td>
				<td>username</td>
				<td>fullname</td>
				<td>...</td>
				<td>gender</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>1</td>
				<td>phancuong</td>
				<td>Phan Văn Cương</td>
				<td>...</td>
				<td>male</td>
			</tr>
			<tr>
				<td>2</td>
				<td>thuhang</td>
				<td>Trần Thu Hằng</td>
				<td>...</td>
				<td>famale</td>
			</tr>
		</tbody>
	</table>
	<h2>Mối quan hệ một nhiều</h2>
	<ul>
		<li>Một bài viết thuộc nhiều danh mục</li>
		<li>Một sản phẩm thuộc nhiều danh mục</li>
		<li>...</li>
	</ul>
</body>
</html>