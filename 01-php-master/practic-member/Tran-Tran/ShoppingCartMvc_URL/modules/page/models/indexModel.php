<?php 
function get_page_by_id($id){
	$q = "SELECT * FROM `tbl_page` WHERE `id` = $id";
	$page = db_fetch_array($q);
	return $page;
}
?>
