<?php 
	class Rectangle {
		// thuộc tính
		public $width ;
		public $height ;

		// phương thức khởi tạo _contruct()
		public function __construct() {
			$this->width = 12;
			$this->height = 30;
		}

		public function getPerimeter() {
			return 2*($this->width + $this->height);
		}

		// phương thúc tính diện tích
		public function getArea() {
			return $this->width * $this->height;
		}

	}

	$a = new Rectangle;
	echo $a -> getPerimeter()."<br/>";
	echo $a -> getArea();
 ?>