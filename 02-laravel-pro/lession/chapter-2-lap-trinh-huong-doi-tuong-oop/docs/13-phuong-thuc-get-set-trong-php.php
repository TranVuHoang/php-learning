<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài 13: Phương thức set và get trong Class</title>
</head>

<body>
	<h1>PHƯƠNG THỨC SET VÀ GET TRONG OOP</h1>
	<pre>
		< ?php
			class Demo {
			private $attr_1;

			public function setValue($value) {
				$this->attr_1 = $value;
			}
			public function getValue() {
				return $this->attr_1;
			}
			//...
			}
			$a = new Demo;
			$a -> setValue();
			echo $a-> getValue();
		 ?>
	</pre>
	<p><strong>Set</strong>: là phương thức chuyên thiết lập giá trị cho thuộc tính</p>
	<p><strong>Get</strong>: là phương thức chuyên lấy dữ liệu của một thuộc tính</p>
</body>

</html>