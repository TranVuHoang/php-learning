<?php

function construct() {
    session_start();
    ob_start();
    load_model('index');
    load('helper', 'format');
}

function indexAction() {
    $cat_id = (int) $_GET['cat_id'];
    $data['info_cat'] = get_info_cat($cat_id);
    $data['list_product'] = get_list_product_by_cat_id($cat_id);
    if(isset($_SESSION['cart']['info'])){
        $data['num_oder'] = $_SESSION['cart']['info']['num_oder'];
    }else{
        $data['num_oder'] = 0;
    }
    load_view('index', $data);
}

function detailAction() {
    $product_id = (int) $_GET['id'];
    $data['item'] = get_product_by_id($product_id);
    if(isset($_SESSION['cart']['info'])){
        $data['num_oder'] = $_SESSION['cart']['info']['num_oder'];
    }
    else{
        $data['num_oder'] = 0;
    }
    load_view('detail', $data);
}
