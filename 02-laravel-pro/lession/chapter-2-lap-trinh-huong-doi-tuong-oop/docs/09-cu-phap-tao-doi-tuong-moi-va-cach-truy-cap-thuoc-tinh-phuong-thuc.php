<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài 9: Cú pháp tạo đối tượng mới và cách truy cập thuộc tính, phương thức</title>
</head>

<body>
	<h1>Khởi tạo lớp mới, truy xuất thuộc tính phương thức</h1>
	<pre>
		< ?php
			$a  = new Rectangle();

			$a -> height = 5;
			$a -> width = 5;

			echo $a -> getPerimeter();
			echo $a -> getArena;
	 	?>
	</pre>
	<p>Sử dụng toán tử "new" để khởi tạo đối tượng thuộc vào lớp cho trước</p>
	<p>Sử dụng toán tử "->" để truy xuất, cập nhật giá trị thuộc tính và kích hoạt các phương thức ở nhóm</p>
	<p><em>(Đúng với thuộc tính và phương thức có tầm vực public)</em></p>
</body>

</html>