<?php

function get_list_users(){
    $result = db_fetch_array("SELECT * FROM `tbl_user`");
    foreach($result as &$user){
        $user['url_update'] = "?mod=users&controller=index&action=update&id={$user['user_id']}";
        $user['url_delete'] = "?mod=users&controller=index&action=delete&id={$user['user_id']}";
    }
    return $result;
}

function get_num_rows($table) {
    $result = db_num_rows("SELECT * FROM `{$table}`");
    return $result;
}

function check_login($username,$password){
    $list_users = db_fetch_array("SELECT `username`,`password` FROM `tbl_user`");
    $password = md5($password);
    foreach($list_users as $user){
        if($username == $user['username'] && $password == $user['password']){
            return true;
        }
    }
    return false;
}
