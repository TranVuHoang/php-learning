<?php 
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
	// $a -> attr_1 = 40;
	$a ->setValue(50);
	// $a -> setValue();
	echo $a-> getValue();
 ?>