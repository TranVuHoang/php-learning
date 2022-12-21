<?php 
function get_user(){
	$q = "SELECT * FROM `tbl_user`";
	$result = db_fetch_array($q);
	return $result;
}
?>
