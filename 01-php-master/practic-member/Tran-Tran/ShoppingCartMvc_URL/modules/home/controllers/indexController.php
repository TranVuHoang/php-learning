<?php 
function construct(){
	load_model('index');
	load('helper','format');
}
function indexAction(){
	//list category
	$list_cat = get_list_cat();
	$list_product = get_list_product();	
	$data = array(
		'list_cat' => $list_cat,
		'list_product' => $list_product
	);
	load_view('index', $data);
}
?>
