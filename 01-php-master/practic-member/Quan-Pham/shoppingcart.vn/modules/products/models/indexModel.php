<?php

function get_num_rows($table) {
    $result = db_num_rows("SELECT * FROM `{$table}`");
    return $result;
}

# Hàm về danh mục

function get_list_cat() {
    $result = db_fetch_array("SELECT * FROM `tbl_product_cat`");
    if (is_array($result)) {
        foreach ($result as &$item) {
            $item['url_delete'] = "?mod=products&controller=cat&action=deleteCat&id={$item['cat_id']}";
        }
        return $result;
    }
    return false;
}

function delete_cat($cat_id) {
    db_delete("tbl_product_cat", "`cat_id` = {$cat_id}");
    return false;
}

function get_info_cat($cat_id) {
    $result = db_fetch_row("SELECT * FROM `tbl_product_cat` WHERE `cat_id`= {$cat_id}");
    return $result;
}

# Hàm về sản phẩm

function get_list_product() {
    $result = db_fetch_array("SELECT * FROM `tbl_product`");
    if (is_array($result)) {
        foreach ($result as &$item) {
            $item['url_delete'] = "?mod=products&controller=cat&action=deleteProduct&id={$item['product_id']}";
        }
        return $result;
    }
    return false;
}

function get_list_product_by_cat_id($cat_id) {
    $result = db_fetch_array("SELECT * FROM `tbl_product` WHERE `product_cat_id` = {$cat_id}");
    foreach ($result as &$item) {
        $item['product_url'] = "?mod=products&controller=index&action=detail&id={$item['product_id']}";
    }
    return $result;
}

function delete_product($product_id) {
    db_delete("tbl_product", "`product_id` = {$product_id}");
    return false;
}

function get_product_by_id($product_id) {
    $result = db_fetch_row("SELECT * FROM `tbl_product` WHERE `product_id` = {$product_id}");
    $result['add_cart_url'] = "?mod=cart&controller=index&action=add&id={$result['product_id']}";
    return $result;
}
