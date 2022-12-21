<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 77 Cập nhật thêm trường cho database</title>
</head>
<body>
	<h1>PHƯƠNG THỨC PHỤ KHI TẠO/CẬP NHẬT BẢNG</h1>
	<table border="1px solid">
		<thead>
			<tr>
				<td>Cú pháp</td>
				<td>Mô tả</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>->after("column")</td>
				<td>Thêm trường mới đằng sau một cột cho trước</td>
			</tr>
			<tr>
				<td>->autoIncrement()</td>
				<td>Thiết lập Integer và tự động tăng khóa chính</td>
			</tr>
			<tr>
				<td>->nullable($value=true)</td>
				<td>Khai báo cho phép cột có thể null</td>
			</tr>
			<tr>
				<td>->unsigned()</td>
				<td>Thiết lập 1 số nguyên không dấu</td>
			</tr>
			<tr>
				<td>->useCurrent()</td>
				<td>Lưu giữ liệu cho cột chính là mốc thời gian hiện tại</td>
			</tr>
			<tr>
				<td>->deafault($value)</td>
				<td>Thiết lập giá trị mặc định cho một trường</td>
			</tr>
			
		</tbody>
	</table>
</body>
</html>