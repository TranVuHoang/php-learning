<?php 
function get_cat_product_by_cat_id($cat_id){
	$q = "SELECT * FROM `tbl_product_cat` WHERE `cat_id` = $cat_id";
	$cat_product = db_fetch_array($q);
	return $cat_product;
}

function total_list_product($cat_id){
	$q = "SELECT * FROM `tbl_product` WHERE `cat_id` = $cat_id";
	$total = db_num_rows($q);
	return $total;	
}

function get_list_product_by_cat_id($cat_id, $start = 1, $num_per_page = 8){
	$q = "SELECT * FROM `tbl_product` WHERE `cat_id` = $cat_id limit {$start}, {$num_per_page}";
	$list_product = db_fetch_array($q);
	//add 'url' into $list_product
	foreach ($list_product as &$product) {
		$product['url'] = "?mod=product&controller=index&action=detail&id={$product['id']}";
	}
	return $list_product;	
}

function get_product_by_id($id){
	$q = "SELECT * FROM `tbl_product` WHERE `id` = {$id}";
	$product = db_fetch_array($q);
	foreach ($product as &$item) {
		$item['url_add_cart'] = "?mod=cart&controller=index&action=add&id={$item['id']}";
	}
	return $product;
}

?>