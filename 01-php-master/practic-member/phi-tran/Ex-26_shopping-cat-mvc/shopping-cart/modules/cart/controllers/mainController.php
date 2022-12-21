<?php

function construct()
{
    load('lib', 'product');
    load('lib', 'cart');
    load('helper', 'format');
}

function showAction()
{
    load_model('main');


    $list_item = get_list_item_in_cart();

    $list_info = get_cart_info();

    
    $data['total_price']=$list_info['total'];
    
    $data['list_item'] = $list_item;
    load_view('main', $data);
}

function addAction()
{
    load_model('main');
    $id = $_GET['id'];

    add_item_to_cart($id);
    redirect_to();
}

function deleteAction(){
    load_model('main');
    $id =$_GET['id'];
    delete_item($id);

    redirect_to();
}

function deleteAllAction(){
    load_model('main');
    delete_all();

    redirect_to();
}

function updateAction(){
    load_model('main');
    $qty=$_POST['qty'];
    show_array($qty);
    foreach($_SESSION['cart']['buy'] as $key=>&$item){
        $item['qty']=$qty[$key];
        $item['sub_total']=$qty[$key]*$item['price'];
    }
    update_info_cart();
    

    redirect_to();
    
}


function updateAjaxAction(){
    load_model('main');
    $qty=(int)$_POST['qty'];
    $id=(int)$_POST['id'];
    
    $_SESSION['cart']['buy'][$id]['qty']=$qty;
    $sub_total=$_SESSION['cart']['buy'][$id]['price']*$qty;
    $_SESSION['cart']['buy'][$id]['sub_total']=$sub_total;

    update_info_cart();

    $cart_info=get_cart_info();
    $total=currency_format($cart_info['total']);
    $sub_total=currency_format($sub_total);

    $result=array(
        'num_order' => $cart_info['num_order'],
        'total' => $total,
        'sub_total' => $sub_total
    );

    //Xuat ket qua
    echo json_encode($result);

}



function checkoutAction(){
    load_model('main');

    $list_info=get_cart_info();


    $list_product=$_SESSION['cart']['buy'];
    $data['list_product']=$list_product;
    $data['total']=$list_info['total'];
    load_view('checkout',$data);
}