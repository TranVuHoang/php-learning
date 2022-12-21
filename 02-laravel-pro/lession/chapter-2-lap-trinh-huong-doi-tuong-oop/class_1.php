<?php
class Retangle
{
	public $width;
	public $height;

	public function getPerimeter()
	{
		return ($this->width + $this->height) * 2;
	}

	public function getArea()
	{
		return ($this->width * $this->height);
	}
}
