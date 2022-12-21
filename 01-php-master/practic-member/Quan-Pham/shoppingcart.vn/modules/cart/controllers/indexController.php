<?php

function construct() {
    session_start();
    ob_start();
    load('helper', 'format');
    load('helper', 'url');
}

function indexAction() {
    if (isset($_SESSION['cart']['buy'])) {
        foreach ($_SESSION['cart']['buy'] as &$item) {
            $item['url_delete_cart'] = "?mod=cart&controller=index&action=delete&id={$item['product_id']}";
        }
        $data['list_buy'] = $_SESSION['cart']['buy'];

        $data['total_cart'] = $_SESSION['cart']['info']['total'];
        if (isset($_SESSION['cart']['info'])) {
            $data['num_oder'] = $_SESSION['cart']['info']['num_oder'];
        }
        load_view('index', $data);
    } else {
        if (isset($_SESSION['cart']['info'])) {
            $data['num_oder'] = $_SESSION['cart']['info']['num_oder'];
        }else{
            $data['num_oder'] = 0;
        }
        load_view('index', $data);
    }
}

function addAction() {
    load_model('index');

    $product_id = (int) $_GET['id'];
    $item = get_product_by_id($product_id);

    $quantity = 1;

    if (isset($_SESSION['cart']['buy']) && array_key_exists($product_id, $_SESSION['cart']['buy'])) {
        $quantity = $_SESSION['cart']['buy'][$product_id]['product_quantity'] + 1;
    }

    $_SESSION['cart']['buy'][$product_id] = array(
        'product_id' => $item['product_id'],
        'product_title' => $item['product_title'],
        'product_price' => $item['product_price'],
        'product_code' => $item['product_code'],
        'product_url' => $item['product_url'],
        'product_thumbnail' => $item['product_thumbnail'],
        'product_quantity' => $quantity,
        'sub_total' => $item['product_price'] * $quantity,
    );
    update_info_cart();

    call_function(redirect_to("?mod=cart&controller=index&action=index"));
}

function update_info_cart() {

    if (!empty($_SESSION['cart'])) {
        $num_oder = 0;
        $total = 0;
        foreach ($_SESSION['cart']['buy'] as $item) {
            $num_oder += $item['product_quantity'];
            $total += $item['sub_total'];
        }

        $_SESSION['cart']['info'] = array(
            'num_oder' => $num_oder,
            'total' => $total,
        );
    }
}

function deleteAction() {
    $product_id = (int) $_GET['id'];
    if (empty($product_id)) {
        unset($_SESSION['cart']['buy']);
        update_info_cart();
        call_function(redirect_to("?mod=cart&controller=index&action=index"));
    } else {
        unset($_SESSION['cart']['buy'][$product_id]);
        update_info_cart();
        call_function(redirect_to("?mod=cart&controller=index&action=index"));
    }
}

function checkoutAction() {
    load('helper','validation');

    if(isset($_SESSION['is_login'])){
        if (isset($_POST['checkout'])) {
            $error = array();
            if (empty($_POST['fullname'])) {
                $error['fullname'] = "Không được để trống Họ và Tên";
            } else {
                $data['fullname'] = $_POST['fullname'];
            }
            if (empty($_POST['email'])) {
                $error['email'] = "Không được để trống email";
            } else {
                $data['email'] = $_POST['email'];
            }
            if (empty($_POST['address'])) {
                $error['address'] = "Không được để trống địa chỉ";
            } else {
                $data['address'] = $_POST['address'];
            }
            if (empty($_POST['tel'])) {
                $error['tel'] = "Không được để trống số điện thoại";
            } else {
                if (!is_phone_number($_POST['tel'])) {
                    $error['tel'] = "Số điện thoại không đúng định dạng";
                } else {
                    $data['tel'] = $_POST['tel'];
                }
            }
            if (empty($_POST['payment-method'])) {
                $error['payment-method'] = "Phải chọn phương thức thanh toán";
            } else {
                $data['payment_method'] = $_POST['payment-method'];
            }
            $data['note'] = $_POST['note'];
            
            if (!empty($error)) {
                $data['error'] = $error;
                // show_array($_SESSION);
            } else {
                $_SESSION['cart']['customer_info'] = array(
                    'name' => $data['fullname'],
                    'email' => $data['email'],
                    'address' => $data['address'],
                    'telephone_number' => $data['tel'],
                    'note' => $data['note'],
                    'payment_method' => $data['payment_method'],
                );
                receiveOderAction();
            }
        }
        if (isset($_SESSION['cart']['buy'])) {
            $data['list_buy'] = $_SESSION['cart']['buy'];
            $data['num_oder'] = $_SESSION['cart']['info']['num_oder'];
            $data['total'] = $_SESSION['cart']['info']['total'];
            load_view('checkout',$data);
        }
    }else{
        call_function(redirect_to("?mod=users&controller=index&action=login"));
    }
}

function receiveOderAction(){
    load('helper','email');
    load('lib','email');
    
    if (isset($_SESSION['cart'])) {
        # Lấy thông tin, xắp sếp thông tin đơn hàng
        $customer_fullname = $_SESSION['cart']['customer_info']['name'];
        $customer_email = $_SESSION['cart']['customer_info']['email'];
        $customer_address = $_SESSION['cart']['customer_info']['address'];
        $customer_telephone_number = $_SESSION['cart']['customer_info']['telephone_number'];
        $customer_note = $_SESSION['cart']['customer_info']['note'];
        $payment_method = $_SESSION['cart']['customer_info']['payment_method'];
        $oder_code = rand();
        $subject = "[Unitop store] Shopping - Xác nhận đơn hàng {$oder_code}";
        $form_email_cart = form_email_cart();
        $content = "Cảm ơn khách hàng {$customer_fullname} đã đặt hàng từ cửa hàng chúng tôi. Đây là Email thông báo quy trình đặt hàng đã hoàn tất. Dưới đây là các mặt hàng quý khách đã đặt mua: </br></br>" . $form_email_cart;
        # Gửi mail xác nhận đơn hàng cho khách
        send_mail($customer_email, $customer_fullname, $subject, $content);
    
        # Gửi mail báo cáo thông tin đơn hàng 
        global $config_email;
        $my_email = $config_email['username'];
        $content = "Nhận đơn hàng {$oder_code} từ khách hàng {$customer_fullname} gồm" . $form_email_cart . "<p>Địa chỉ: <strong>{$customer_address}</strong></p><p>Số điện thoại của khách hàng: <strong>{$customer_telephone_number}</strong></p><p>Chú thích: <strong>{$customer_note}</strong></p><p>Phương thức thanh toán: <strong>{$payment_method}</strong></p>";
        send_mail($my_email, "", $subject, $content);
        unset($_SESSION['cart']);
        update_info_cart();
        load_view('thanks');
    }
}

function updateAction(){
    
    if(isset($_POST['active_ajax'])){

        $product_id = (int)$_POST['product_id'];
        $num_order = (int)$_POST['num_order'];
        $product_price = $_SESSION['cart']['buy'][$product_id]['product_price'];
        $str_selector = "tr[title='{$product_id}']";
        // $str_price = explode(",",trim($_POST['price'],"VNĐ"));
        // $price = floatval(join("",$str_price));
    
        $sub_total = $product_price * $num_order;
    
    
        $_SESSION['cart']['buy'][$product_id]['product_quantity'] = $num_order;
        $_SESSION['cart']['buy'][$product_id]['sub_total'] = $sub_total;
        update_info_cart();
    
        $cart_num_order = $_SESSION['cart']['info']['num_oder'];
        $total = $_SESSION['cart']['info']['total'];
        
    
        $result = array(
            'product_id' => $product_id,
            'num_order' => $num_order,
            'product_price' => $product_price,
            'sub_total' => number_format($sub_total)." VNĐ",
            'str_selector' => $str_selector,
            'cart_num_order' => $cart_num_order,
            'total' => number_format($total)." VNĐ",
        );
        echo json_encode($result);
    }
}


    






