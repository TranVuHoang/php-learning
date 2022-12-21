<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 10: Phương thức khởi tạo __constructor </title>
</head>
<body>
	<h1>PHƯƠNG THỨC KHỞI TẠO (CONTRUCT)</h1>
	<pre>
		< ?php 
			class Rectangle {
				// khai báo thuộc tính
				public $height;
				public $width;

				// khai báo phương thức
				public function __construct() {
					$this-> width = 125;
					$this-> height = 10;
				}
			}
		 	$a  = new Rectangle();
		 ?>
	</pre>
	<p>Ngay khi khởi tạo đối tượng thì lớp Rectangle tự động thực thi phương thức khởi tạo (contruct). <br>
	Tiến hành thiết lập width, height cho đối tượng.
	</p>
	<p>Đây là một cách để thực thi những xử lý có thể chạy từ đầu</p>
</body>
</html>