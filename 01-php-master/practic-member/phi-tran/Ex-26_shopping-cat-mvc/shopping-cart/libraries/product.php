<?php

function add_url_to($arr)
{

    foreach ($arr as &$item) {
        $item['url_detail'] = "?mod=product&controller=main&action=detail&id={$item['id']}";
        $item['url_add_cart'] = "?mod=cart&controller=main&action=add&id={$item['id']}";
    }
    return $arr;
}

function add_url_to_one($item)
{
    $item['url_detail'] = "?mod=product&controller=main&action=detail&id={$item['id']}";
    $item['url_add_cart'] = "?mod=cart&controller=main&action=add&id={$item['id']}";
    return $item;
}
