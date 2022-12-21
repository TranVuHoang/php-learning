<?php 
function get_product_by_id($id){
	// $q = "SELECT * FROM `tbl_product` WHERE `id` = {$id}";
	$q = "SELECT * FROM `tbl_product` INNER JOIN `tbl_product_cat` "
	."ON `tbl_product`.`cat_id` = `tbl_product_cat`.`cat_id` WHERE `id` = {$id}";
	$product = db_fetch_array($q);
	foreach ($product as &$item) {
		$cat_name = make_url($item['cat_name']);
		$product_title = make_url($item['product_title']);
		$item['url'] = "$cat_name/$product_title-{$id}.html";
	}
	return $product;
}
?>