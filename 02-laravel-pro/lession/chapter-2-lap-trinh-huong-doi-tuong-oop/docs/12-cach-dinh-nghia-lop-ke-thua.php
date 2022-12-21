<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 12: Cách định nghĩa lớp kế thừa</title>
</head>
<body>
	<h1>LỚP KẾ THỪA TRONG OOP</h1>
	<pre>
		< ?php 
			class A {
				public $attr_1;
				//...
				function method_1() {
					//...
				}
			}
			class B extends A {
				//...
			}
			$b = new B;
			echo $b -> method_1();
		 ?>
		 <p>Lớp kế thừa giúp chúng ta tạo một lớp mới và thừa hưởng các thuộc tính một lớp đã tồn tại trước đó</p>
		 <p>Bằng cách này giúp kế thừa những tài nguyên đã tồn tại và có thể sử dụng lại.</p>
		 <p>Chỉ kế thừa những phương thức, thuộc tính có tầm vực <strong>public</strong> và <strong>protected</strong> không bao gồm <em>private</em></p>
	</pre>
</body>
</html>