<?php

function get_product_by_id($product_id) {
    $result = db_fetch_row("SELECT * FROM `tbl_product` WHERE `product_id` = {$product_id}");
    $result['product_url'] = "?mod=products&controller=index&action=detail&id={$result['product_id']}";
    return $result;
}
