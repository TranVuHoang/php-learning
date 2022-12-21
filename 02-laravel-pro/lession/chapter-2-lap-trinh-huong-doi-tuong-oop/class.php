<?php
class Rectangle
{
	// thuộc tính
	public $width = 20;
	public $height = 10;

	// phuong thuc tinh chu vi
	public function getPerimeter()
	{
		return 2 * ($this->width + $this->height);
	}

	// phuong thuc tinh dien tich
	public function getArea()
	{
		return $this->width * $this->height;
	}
}

$a = new Rectangle;

$a->width = 5;
$a->height = 4;
echo "Chu vi hinh chu nhat =";
echo $a->getPerimeter();
echo "</br> Dien tich HCN =";
echo $a->getArea();
