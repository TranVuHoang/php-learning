<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 31 Mô hình MVC laravel</title>
</head>
<body>
	<h1>LUỒNG XỬ LÝ MVC TRONG LARAVEL</h1>
	<strong>Routing</strong>: Định tuyến <br>
	<ul>
		<li>Nhận yêu cầu người dùng, phân tích và gửi yêu cầu đến cho controller thích hợp để xử lý</li>
	</ul>
	<strong>Controller</strong>: Trung tâm điều khiển xử lý <br>
	<ul>
		<li>Phân tích và xem chức năng này có cần làm việc với database hay k</li>
		<li>Nếu có => chuyển qua Model(làm việc với databae)</li>
		<li>Chuyển dữ liệu đã được controller xử lý gửi qua Views</li>
	</ul>
	<strong>Model</strong>: Phụ trách làm việc với datatabase <br>
	<ul>
		<li>Làm việc với csdl</li>
		<li>thực hiện các chức năng thêm, sửa, xóa</li>
		<li>Xử lý xong thì trả về controller</li>
	</ul>
	<strong>View</strong>: Thiết lập trang hiển thị cho người dùng trên trình duyệt
	<ul>
		<li>Tạo ra trang HTML</li>
	</ul>
</body>
</html>