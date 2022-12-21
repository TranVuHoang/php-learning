<?php

// viet them ham thoi co gi dau
function get_list_cat(){
	$data = "SELECT * FROM tbl_product_cat";
	$cate_product = db_fetch_array($data);
	//add 'url' into $list_product
	foreach ($cate_product as &$category) {
		$cat_name = make_url($category['cat_name']);
		$category['url'] = $cat_name;
		// $category['url'] = "?mod=product&controller=index&action=index&cat_id={$category['cat_id']}";
	}
	return $cate_product;	
}

function get_cat_product_by_cat_id($cat_id){
	$q = "SELECT * FROM `tbl_product_cat` WHERE `cat_id` = $cat_id";
	$cat_product = db_fetch_array($q);
	foreach ($cat_product as &$item) {
		$item['url'] = "?mod=product&controller=index&action=index&cat_id={$cat_id}";
	}
	return $cat_product;
}

function get_list_product_by_cat_id($cat_id){
	$q = "SELECT * FROM `tbl_product` WHERE `cat_id` = $cat_id";
	$list_product = db_fetch_array($q);
	//add 'url' into $list_product
	foreach ($list_product as &$product) {
		$product['url'] = "?mod=product&controller=index&action=detail&id={$product['id']}";
	}
	return $list_product;	
}

function get_list_product(){
	$q = "SELECT * FROM `tbl_product` INNER JOIN `tbl_product_cat` ON `tbl_product`.`cat_id` = `tbl_product_cat`.`cat_id`";
	$list_product = db_fetch_array($q);
	//add 'url' into $list_product
	foreach ($list_product as &$product) {
		$cat_name = make_url($product['cat_name']);
		$title_product = make_url($product['product_title']);
		$product['url'] = "{$cat_name}/{$title_product}-{$product['id']}.html";
	}
	return $list_product;	
} 

?>