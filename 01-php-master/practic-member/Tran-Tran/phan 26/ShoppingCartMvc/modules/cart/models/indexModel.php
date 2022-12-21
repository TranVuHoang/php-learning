<?php 
function get_product_by_id($id){
	$q = "SELECT * FROM `tbl_product` WHERE `id` = {$id}";
	$product = db_fetch_array($q);
	foreach ($product as &$item) {
		$item['url'] = "?mod=product&controller=index&action=detail&id={$id}";
	}
	return $product;
}
?>