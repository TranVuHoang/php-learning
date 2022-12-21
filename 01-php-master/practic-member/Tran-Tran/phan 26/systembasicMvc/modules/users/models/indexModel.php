<?php

function get_list_users($start = 1, $num_per_page = 8, $where = "") {
	if(!empty($where)){
		$where = "WHERE".$where;
	}
	$result = db_fetch_array("SELECT * FROM `tbl_user` {$where} limit {$start}, {$num_per_page}");
	return $result;
}

function get_num_user(){
	$num = db_num_rows("SELECT * FROM `tbl_user`");
	return $num;
}
function get_user_by_id($id) {
	$item = db_fetch_row("SELECT * FROM `tbl_user` WHERE `user_id` = {$id}");
	return $item;
}

function update_user($data = array(), $id){
	$update = db_update('tbl_user', $data, "`user_id` = {$id}");
	if($update)
		return true;
	return false;
}

function delete_user($id){
	$delete = db_delete('tbl_user', "`user_id` = {$id}");
	if($delete)
		return true;
	return false;
}
