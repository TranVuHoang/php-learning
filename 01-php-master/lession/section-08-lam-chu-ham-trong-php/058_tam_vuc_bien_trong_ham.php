<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 58 Tầm vực biến trong hàm</title>
</head>
<body>
	<h1>TẦM VỰC BIẾN TRONG HÀM</h1>
	<h3>TẦM VỰC BIẾN LÀ GÌ?</h3>
	<p>Là phạm vi sử dụng của biến trong hàm</p>
	<ul>
		<li>
			Biến có tầm vực nội bộ hàm
		</li>
		<li>
			Biến có tầm vực ngoài phạm vi hàm
		</li>
	</ul>
	<h3>BIẾN CÓ TẦM VỰC CỤC BỘ</h3>
	<p>Biến chỉ có tác dụng trong nội bộ hàm, không có tác dụng bên ngoài hàm.</p>
	<pre>
		function sum($a, $b) {
			$t = $a + $b;
			return $t;
		}
	</pre>
	<h3>BIẾN CÓ TẦM VỰC TOÀN CỤC</h3>
	<pre>
		$a = 10;
		$b = 5;
		function sum() {
			global $a, $b; // a, b thành global
			return $a + $b;
		}
		[hoặc]

		function sum() {
			return $GLOBALS['a'] + GLOBALS['b'];
		}
	</pre>

</body>
</html>