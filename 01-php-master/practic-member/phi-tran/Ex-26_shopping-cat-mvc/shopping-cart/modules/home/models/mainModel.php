<?php


function get_cat_title_by_catid($cat_id)
{
    return db_fetch_row("SELECT * FROM `tbl_category` WHERE `cat_id`={$cat_id}");
}

function get_list_cat(){
    return db_fetch_array("SELECT * FROM `tbl_category`");
}

function get_list_product_by_catid($cat_id)
{
    return db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id`={$cat_id}");
}