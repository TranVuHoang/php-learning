<?php 
function construct(){
	load('helper', 'format');
	load('helper', 'paging');
	load_model('index');
}
function indexAction(){
	$cat_id = $_GET['cat_id'];	 
	$cat_product = get_cat_product_by_cat_id($cat_id);
	$info_cat = array_shift($cat_product);	

	//pagging
	$num_row = total_list_product($cat_id);
	$total_row = $num_row;
	$num_per_page = 3;
	$num_page = ceil($total_row / $num_per_page);
	$page = isset($_GET['page']) ? $_GET['page']: 1; 
	$start = ($page - 1) * $num_per_page; 

	$list_product = get_list_product_by_cat_id($cat_id, $start, $num_per_page);
	$item = array(
		'info_cat' => $info_cat,
		'list_product' => $list_product,
		'num_page' => $num_page,
		'page' => $page,
		'cat_id' => $cat_id,
		'num_row' => $num_row
	);
	load_view('product',$item);
}

function detailAction(){
	$id = $_GET['id'];
	$product = get_product_by_id($id);	 
	//remove key 
	$info_product = array_shift($product); //chi ap dung array_shift khi no la 1 mang
	//add url_add_cart
	$data['product'] = $info_product;
	load_view('detail', $data);
}


?>

