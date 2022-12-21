<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 91 pp gọi file</title>
</head>
<body>
	<h1>NHỮNG ỨNG DỤNG NÂNG CAO TRONG PHP</h1>
	<h2>PHƯƠNG PHÁP GỌI FILE TRONG PHP</h2>
	<h3>TẠI SAO CẦN GỌI FILE</h3>
	<ul>
		<li>Gọi nhiều file vào cùng xử lý chức năng</li>
		<li>Tăng tổ chức code của hệ thống</li>
		<li>Tối ưu hiệu suất</li>
		<li>Dễ quản lý</li>
	</ul>
	<h3>Câu lệnh gọi file trong PHP</h3>
	<ul>
		<li>include</li>
		<li>include_once</li>
		<li>require</li>
		<li>require_once</li>
	</ul>
	<h3>PHÂN BIỆT</h3>
	<a href="">Giống nhau</a><br>
	<ul>
		<li>Câu lệnh <strong>include</strong> (hoặc <b>require</b>) dùng để lấy tất cả nội dung bao gồm text, code và các thẻ của một file(nếu tồn tại) vào file người dùng sử dụng hàm include</li>
		<li>Gọi file nó rất hữu ích trong việc chúng ta cần gói nội dung cần gói nội dung PHP từ nhiều file khác nhau trong hệ thống của chúng ta</li>
	</ul>
	<a href="">Khác nhau</a> trường hợp file đc gọi không tồn tại: <br>
	<ul>
		<li>Include cảnh báo lỗi chương trình vẫn chạy</li>
		<li>Require báo lỗi và dừng ngay chương trình</li>
	</ul>
	<h3>Ví dụ</h3>
	<pre>
		< ?php 
			//Header website
			require 'inc/header.pph';
			//======================
			//thân website
			//======================
			//footer website
			require 'inc/footer.php';
		 ?>
	</pre>
	<h3>Ghi nhớ</h3>
	<ul>
		<li>Include, require gọi file cùng xử lý chương trình</li>
		<li>include_once, require_once chỉ gọi file chưa được gọi trước đó</li>
		<li>hàm file_exits() dùng để kiểm tra sự tồn tại trước khi gọi file</li>
	</ul>
</body>
</html>