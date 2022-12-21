<?php 
function get_list_users(){
	$result = db_fetch_array("SELECT * FROM `tbl_user`");
	return $result;
}

function check_info_login($username, $password){	
	$q = "SELECT * FROM `tbl_user` WHERE `username` = '{$username}' AND `password` = '{$password}'";
	$num_row = db_num_rows($q); 
	if($num_row == 1)
		return true;
	return false;
}


?>