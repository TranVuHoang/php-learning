<?php
class A
{
	public $attr_1 = 10;
	//...
	public function method_1()
	{
		//...
		echo "OK";
	}
}
class B extends A
{
	//...
	public $attr_2;

	//...
	public function method_2()
	{
		return $this->attr_1;
	}
}
$b = new B;
// echo $b -> method_1();
$b->attr_2 = "Class B";
echo $b->method_2();
