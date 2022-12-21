<?php

function get_page_by_id($id){
    $arr=db_fetch_array("SELECT * FROM `tbl_pages`");
    foreach($arr as $item){
       if($item['id']==$id){
             return $item;
       }
    }
    return false;
}


function get_list_product_by_catid($cat_id)
{
    return db_fetch_array("SELECT * FROM `tbl_products` WHERE `cat_id`={$cat_id}");
}