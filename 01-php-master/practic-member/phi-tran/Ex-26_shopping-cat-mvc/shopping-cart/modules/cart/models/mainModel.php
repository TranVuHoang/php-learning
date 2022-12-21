<?php

function get_product_by_id($id){
    return db_fetch_row("SELECT * FROM `tbl_products` WHERE `id`={$id}");
}


function add_item_to_cart($id){
    //Luu san pham da mua
    $qty=1;
    if(!empty($_SESSION['cart']['buy'][$id]['qty'])){
        $qty=$_SESSION['cart']['buy'][$id]['qty']+1;
    }
    $item=get_product_by_id($id);
    
    $_SESSION['cart']['buy'][$id]=array(
        'id'=> $item['id'],
        'product_title' => $item['product_title'],
        'price' => $item['price'],
        'product_thumb' => $item['product_thumb'],
        'code'=>$item['code'],
        'url_detail'=>"?mod=product&controller=main&action=detail&id={$id}",
        'url_delete'=>"?mod=cart&controller=main&action=delete&id={$id}",
        'qty' => $qty,
        'sub_total' => $qty*$item['price']
    );

    update_info_cart();
}




function update_info_cart(){
    $num_order=0;
    $total=0;
    foreach($_SESSION['cart']['buy'] as $item){
        $num_order+=$item['qty'];
        $total+=$item['sub_total'];
    }
    $_SESSION['cart']['info']=array(
        'num_order'=> $num_order,
        'total' => $total
    );
}

function get_cart_info(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['info'];
    }
    return false;
}


function get_list_item_in_cart(){
    if(isset($_SESSION['cart'])){
        return $_SESSION['cart']['buy'];
    }
    return false;
}



function delete_item($id){
     unset($_SESSION['cart']['buy'][$id]);
     update_info_cart();
}

function delete_all(){
    unset($_SESSION['cart']);
    
}