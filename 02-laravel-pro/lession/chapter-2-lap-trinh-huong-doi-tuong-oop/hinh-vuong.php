<?php 

	/**
	 * summary
	 */
	class HinhVuong {
	    /**
	     * phương thúc: canh
	     */
	    public $canh = 10;

		// thuộc tính
	    public function chuVi() {
	        return 4 * $this->canh;
	    }
	    public function dienTich() {
	    	return $this->canh * $this->canh;
	    }
	}
	$hinh_1 = new HinhVuong();
	// $hinh_1 ->canh = 5;
	echo "Cạnh hình vuông = ".$hinh_1->canh."<br/>";
	echo "Chu vi hình vuông là: $hinh_1->canh * 4 = ".$hinh_1->chuVi();
 ?>