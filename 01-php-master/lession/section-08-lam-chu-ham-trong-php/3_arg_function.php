<?php 

#Hàm có 1 tham số
	function check_even($n) {
		if($n %2 == 0) {
			echo "{$n} là số chẵn<br/>";
		}
	}
	check_even(6);

#Hàm có 2 tham số
	// function sum ($a, $b) {
	// 	$t = $a + $b;
	// 	echo $t;
	// }
#Hàm có tham số tùy biến.
	function show_array($data) {
		if(is_array($data)) {
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
	}
#Hàm có tham số tùy biến.(Tính tổng của nhiều số cho trước)
	function sum_multi_number($list_args) {
		// số tham số của hàm
		// echo func_num_args()."<br/>";

		// 0 1 2 3

		// $a = func_get_arg(0);
		// $b = func_get_arg(1);
		
		$list_args = func_get_args();
		if(is_array($list_args)) {
			$t = 0;
			foreach ($list_args as $value) {
				$t += $value;
			}
		}
		show_array($list_args);
		echo "Tổng = {$t}";
	}
	sum_multi_number(1, 7, 8);	// gọi hàm
# tính tổng trong một mảng 1 chiều
	
	function sum_multi_numbers($list_numbers) {
		
		if(is_array($list_numbers)) {
			$t = 0;
			foreach ($list_numbers as $value) {
				$t += $value;
			}
		}
		show_array($list_numbers);
		echo $t;
	}
	$list_number = array(1, 2, 3, 4, 5); // Mảng ban đầu
	sum_multi_numbers($list_number); // gọi hàm tính tổng

	//key => value;
	function my_function($arg_1, $arg_2, $option = array()) {

	}
	// <input type="text" name="" value="" id="" class="">
	function create_input_text($name, $value, $option = array()){
		$name = func_get_arg(0);
		$value = func_get_arg(1);
		$option = func_get_arg(2);
		if(!emtry($option)) {
			$id = $option["id"];
			$class = $option["class"];
		}
		$input_html = "<input type="text" name="{$name}" value="$vale" id="$id" class="$class">";

		return $input_html;
	}
	create_input_text("user_name", "", $option= array("id" => "user_name", "class" => "class"))
 ?>
