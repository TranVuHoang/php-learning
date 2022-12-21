<?php 
class Demo {
	public $attr_1;
	private $attr_2;
	protected $attr_3 = 60;

	public function show() {
		return $this->attr_1;
	}

}

class User extends Demo {
	function __construct() {
		echo $this->attr_3;
	}
}

// $a = new Demo;
// $a -> attr_1 = 15;
# $a -> attr_2 = 10;

// echo $a -> attr_1;
// $a -> attr_1 = 100;
// echo $a -> show();

// new User;
$u = new User;
// $u -> attr_3 = 30;
 ?>
