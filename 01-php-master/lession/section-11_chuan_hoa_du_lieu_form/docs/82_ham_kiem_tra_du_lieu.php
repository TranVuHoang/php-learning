<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 82 Hàm kiểm tra dữ liệu</title>
</head>
<body>
	<h1>HÀM KIỂM TRA DỮ LIỆU</h1>
	<h3>HÀM KIỂM TRA SỰ TỒN TẠI CỦA BIẾN</h3>
		bool isset($var[,$...])
	<ul>
		<li>Hàm trả về true nếu biến tồn tại và giá trị ko phải NULL</li>
		<li>Hàm có nhiều tham số trả về true nếu tất cả các biến tham số đều trả về true</li>
	</ul>
	<pre>
		if(isset($_POST[$username])) {
			//xử lý khi biến tồn tại
		}
	</pre>
	<h3>HÀM KIỂM TRA DỮ LIỆU RỖNG</h3>
	<ul>
		<li>Biến được coi là rỗng khi biến không tồn tại hoặc tồn tại và có giá trị false</li>
		<li>Các trường hợp biến giá trị false</li>
	</ul>
	<pre>
		"" (an emty string)
		0 (0 as an integer)
		0 0 (0 as a float)
		"0" (0 as a string)
		NULL
		FALSE
		array() (an emty array)
	</pre>
	<h3>HÀM KIỂM TRA DỮ LIỆU RỖNG</h3>
	<pre>
		if(emty($error)) {
			//xử lý dữ liệu rỗng
		} else {
			//...
		}
		if(!emty($var)) {
			// xử lý dữ liệu không rỗng
		} else {
			//...
		}
	</pre>
</body>
</html>