<?php

function construct() {
    session_start();
    ob_start();
}

function indexAction() {
    load_model('index');
    load('helper', 'format');
    $data['list_mobile'] = get_list_product_by_cat_id(1);
    $data['list_computer'] = get_list_product_by_cat_id(2);
    $data['list_earphone'] = get_list_product_by_cat_id(3);
    $data['info_cat_mobile'] = get_info_cat(1);
    $data['info_cat_computer'] = get_info_cat(2);
    $data['info_cat_earphone'] = get_info_cat(3);
    if (isset($_SESSION['cart']['info'])) {
        $data['num_oder'] = $_SESSION['cart']['info']['num_oder'];
    }else{
        $data['num_oder'] = 0;
    }

    
    
    load_view('index', $data);
}