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
	$q = "SELECT * FROM `tbl_product` INNER JOIN `tbl_product_cat` ON "
	." `tbl_product`.`cat_id` = `tbl_product_cat`.`cat_id`"
	." WHERE `tbl_product`.`cat_id` = $cat_id limit {$start}, {$num_per_page}";
	$list_product = db_fetch_array($q);
	foreach ($list_product as &$product) {		
		$cat_name = make_url($product['cat_name']);
		$title_product = make_url($product['product_title']); 
		$product['url'] = "{$cat_name}/{$title_product}-{$product['id']}.html";			
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