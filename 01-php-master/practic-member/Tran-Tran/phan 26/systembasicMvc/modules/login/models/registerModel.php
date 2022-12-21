<?php 
function add_user($data = array()){
	$result = db_insert('tbl_user', $data);
	if($result > 0)
		return true;
	return false;
}

?>