<?php

function construct(){
    load('helper','format');
    load('lib','product');
}

function mainAction(){
    
    load_model('main');
    $cat_id=$_GET['cat_id'];
    $list_product=get_list_product_by_catid($cat_id);
    //Them url vao tung san pham
    $list_product=add_url_to($list_product);


    $total_product=count($list_product);

    $list_cat_title=get_cat_title_by_catid($cat_id);
    $cat_title=$list_cat_title['cat_title'];

    $data['list_product']=$list_product;
    $data['total_product']=$total_product;
    $data['cat_title']=$cat_title;

    load_view('main',$data);
}


function detailAction(){
    load_model('main');
    
    $id=$_GET['id'];
    $product=get_product_by_id($id);
    $product=add_url_to_one($product);

    $data['product']=$product;

    load_view('detail',$data);
}