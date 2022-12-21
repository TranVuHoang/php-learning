<?php 
	class Rectangle {
		// khai báo thuộc tính
		public static $width;
		public static $height;

		// khai báo phương thức
		public static function getPerimeter() {
			return 2 * (self::$width + self::$height);
		}
		public static function getArea() {
			return self::$height * self::$width;
		}
	}
	// echo Rectangle::$width = 5; 
	// echo "<br/>";
	// echo Rectangle::$height = 4 ; 
	// echo "<br/>";
	// echo "Diện tích HCN = ".Rectangle::getArea();
 	
 	class Demo {
 		public function __construct() {
 			Rectangle:: $width = 14;
 			Rectangle:: $height = 12;
 			echo Rectangle::getPerimeter();
 		}
 	}
 	new Demo;

  ?>