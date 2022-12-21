<?php 
	class TamGiac {
		// thuộc tính
		public $canh_1 = 3;
		public $canh_2 = 4;
		public $canh_3 = 5;

		// phương thức tính chu vi
		public function getChuVi() {
			return $this->canh_1 +$this->canh_2 + $this->canh_3;
		}
	}
	$tamGiac = new TamGiac;
	// $tamGiac -> canh_1 = 4;
	// chu vi tam giác
	echo "Chu vi tam giác là: $tamGiac->canh_1 + $tamGiac->canh_2 + $tamGiac->canh_3 =".$tamGiac->getChuVi();

 ?>