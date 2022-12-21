<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 93: Lưu trữ phiên làm việc với session</title>
</head>
<body>
	<h2>Phiên là gì?</h2>
	<ul>
		<li>Phiên là 1 chu trình người dùng gửi yêu cầu lên server và được server hồi đáp. Sau khi server hồi đáp trả lại trang nó sẽ đóng kết nối</li>
		<li>Các phiên làm việc của web server k thể kết nối các phiên làm việc với nhau để phục vụ công việc nào đó</li>
	</ul>
	<h2>Tạo session</h2>
	<pre>
		< ?php 
			session_start();
			$_SESSION["is_login"] = true;
		 ? >
	</pre>
	<h2>Tạo dữ liệu session</h2>
	<pre>
		< ?php 
			$_SESSION["is_login"] = true;
			$_SESSION['user_login'] = "unitop";
		 ?>
	</pre>
	<h2>Kiểm tra dữ liệu session</h2>
	<pre>
		< ?php 
			ob_start();
			if(!isset($_SESSION['is_login'])) {
				// Chuyển hướng khi chưa login
			} else {
				header("Loaction: login.php");
			}
		 ?>
	</pre>
	<h2>Hủy session</h2>
	<pre>
		< ?php 
			session_start();
			// xóa đi 1 biến session
			unset($_SESSION['is_login'])

			// xóa toàn bộ session
			session_destroy();
		 ?>
	</pre>
</body>
</html>