<?php

function get_list_product_by_catid($cat_id)
{
    return db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id`={$cat_id}");
}

function get_cat_title_by_catid($cat_id)
{
    return db_fetch_row("SELECT * FROM `tbl_category` WHERE `cat_id`={$cat_id}");
}

function get_product_by_id($id){
    return db_fetch_row("SELECT * FROM `tbl_products` WHERE `id`={$id}");
}