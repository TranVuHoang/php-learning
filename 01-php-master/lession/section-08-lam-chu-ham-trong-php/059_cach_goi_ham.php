<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài 59: Cách gọi hàm để sử dụng</title>
</head>

<body>
	<h1>CÁCH GỌI HÀM ĐỂ SỬ DỤNG</h1>
	<h3>GỌI HÀM TRONG PHP</h3>
	<p>Để gọi hàm bạn vui lòng viết tên hàm kèm tham số(nếu có) và kết thúc bằng dấu;</p>
	<pre>
		< ?php
			checkEvent(5);
			total_prime(1, 100);
 		? >
	</pre>
	<p>Đối với hàm có giá trị trả về bạn cần sử dụng biến gán lại giá trị trả về sau khi gọi hàm để sử dụng về sau.</p>
	<pre>
		< ?php
			$t = total_prime(1, 100);
		 ? >
	</pre>
</body>

</html>