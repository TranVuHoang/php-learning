<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 11: Tính Static của thuộc tính và phương thức của Class</title>
</head>
<body>
	<h1>THUỘC TÍNH, PHƯƠNG THỨC KIỂU STATIC</h1>
	<pre>
		< ?php 
			class Retangle {
				// khai báo thuộc tính
				public static $height = 15;
				public static $width = 5; 

				// khai báo phương thức
				public static function getPerimeter() {
					return 2 * (self::$height + self::$width);
				}
				public static function getArea() {
					return self::$width * self::$height;
				}
			}
			echo Retangle::$height = 20;
			echo Retangle::getArea();
		 ?>
	</pre>
	<p>Static giúp chúng ta có thể truy xuất các thuộc tính, phương thức trong một lớp mà k cần khởi tạo đối tượng</p>
	<p>Cách truy xuất thuộc tính được thiết lập thông qua toán tử "self::"</p>
	<p>Để gọi 1 phương thức chỉ cần</p>
	echo Retangle::getPerimeter(); <br>
	echo Retangle::getArea(); 
</body>
</html>