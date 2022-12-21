<?php
$product_id = $_POST['product_id'];//đặt biến lấy giá trị product_id
$num_order = $_POST['num_order'];//đặt biến lấy giá trị num-order
$price = $_SESSION['cart']['buy'][$product_id]['price'];//cap nhat lai giá
$sub_total = $price * $num_order;//tổng giá từng sản phẩm bằng vs giá . số lượng mới
//Câp nhật mang [cart][buy]
$_SESSION['cart']['buy'][$product_id]['qty'] = $num_order;//cập nhật lại số lượng mới
$_SESSION['cart']['buy'][$product_id]['sub_total'] = $sub_total;//cập nhật lại tổng tiền
update_info_cat();//cập nhật thông tin mảng
//Lấy tổng tiền
$total = $_SESSION['cart']['info']['total'];//cập nhật thông tin thành tiền từng sản phẩm
$num_order_cart = $_SESSION['cart']['info']['num_order'];//cập nhật thông tin thành tiền các sản phẩm
$result = array(
    'sub_total' => currency_format($sub_total),
    'total' => currency_format($total),
    'num_order_cart' => $num_order_cart,
);
echo json_encode($result);


