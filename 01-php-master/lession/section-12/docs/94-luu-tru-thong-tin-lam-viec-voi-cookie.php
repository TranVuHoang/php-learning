<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 94: Lưu thông tin với cookie</title>
</head>
<body>
	<h1>COOKIE LÀ GÌ?</h1>
	<ul>
		<li>Cookie cung cấp cho ứng dụng web 1 phương thức lưu trữ thông tin trên trình duyệt của người dùng và truy xuất khi người dùng gửi yêu cầu xem trang.</li>
		<li>cookie được lưu trữ theo cặp thông tin key/value</li>
		<li>Cookie được lưu ở trình duyệt người dùng và có thể truy xuất từ server khi người dùng truy cập trang</li>
		<li>Thời gian sống của server được quy định tối đa 3 năm</li>
		<li>Cookie có tầm ảnh hưởng đến các vùng trên server cho chúng ta quy định</li>
	</ul>
	<h2>Thiết lập cookie</h2>
	<pre>
		setcoookie($name, $value, $expire, $path, $domain)
	</pre>
	<a href="">Trong đó</a> <br>
	<ul>
		<li><strong>$name</strong></li> Tên cookie
		<li><strong>$value</strong></li> Giá trị cookie(mặc định chuỗi rỗng)
		<li><strong>$expire</strong></li> Thời gian sống cookie, nếu được thiết lập 0 thì sau khi tắt trình duyệt cookie tự mất. Thời gian sống tối đa 3 năm
		<li><strong>$path</strong></li> Đường dẫn trên server mà cookie có hiệu lực. Nếu được thiết lập là/ thì cookie có hiệu lực với tất cả các file trên server
		<li><strong>$domain</strong> : Tên miền cookie có hiệu lực</li>
	</ul>
	<h2>Ví dụ</h2>
	<pre>
		< ?php 
			$name = 'is_login';
			$value= true;
			$expire = time()+3600;
			$path = '/';
			setcookie($name, $value, $expire, $path);
		 ?>
		 hoặc
		 < ?php 
		 	setcookie('is_login', true, time()+3600, '/');
		  ?>
	</pre>
	<h2>Lấy giá trị cookie</h2>
	<p>Biến toàn cục $_COOKIE là nơi lưu thông tin của COOKIE</p>
	<p>Dựa theo tên của cookie để truy xuất và lấy giá trị</p>
	<pre>
		< ?php 
			$is_login  = $_COOKIE['is_login'];
			echo $is_login;
		 ?>
	</pre>
</body>
</html>