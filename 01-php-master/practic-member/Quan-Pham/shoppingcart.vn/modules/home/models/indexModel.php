<?php

// function get_list_users(){
//     $result = db_fetch_array("SELECT * FROM `tbl_users`");
//     return $result;
// }
// function get_user_by_id($id){
//     $item = db_fetch_row("SELECT * FROM `tbl_users` WHERE `user_id`= {$id}");
//     return $item;
// }

function get_list_product_by_cat_id($cat_id) {
    $result = db_fetch_array("SELECT * FROM `tbl_product` WHERE `product_cat_id` = {$cat_id}");
    if (is_array($result)) {
        foreach ($result as &$item) {
            $item['product_url'] = "?mod=products&controller=index&action=detail&id={$item['product_id']}";
        }
        return $result;
    }
    return false;
}

function get_info_cat($cat_id) {
    $result = db_fetch_row("SELECT * FROM `tbl_product_cat` WHERE `cat_id` = {$cat_id}");
    $result['cat_url'] = "?mod=products&controller=index&cat_id={$cat_id}";
    return $result;
}
