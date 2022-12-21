<?php
function construct(){
	// load('lib','cart');
	load('helper','format');
	load_model('index');
}

function indexAction(){ 
	$list_buy_cart = get_list_buy_cart();
	$list_buy['list_buy'] = $list_buy_cart;
	load_view('show', $list_buy);
}

function addAction(){
	$id = (int)$_GET['id'];
	$add_cart = add_cart($id);	 
	$list_buy_cart = get_list_buy_cart();
	$list_buy['list_buy'] = $list_buy_cart;
	load_view('show',$list_buy);
}

function deleteAction(){
	$id = (int)$_GET['id'];
	$del_product = delete_cart($id);	
	redirect('?mod=cart&controller=index');
}

function delete_allAction() {
	delete_cart();
	redirect('?mod=cart&controller=index');
}

function updateAction() {
	if(isset($_POST['btn_update_cart'])){
		update_cart($_POST['qty']);		
	}
	redirect('?mod=cart&controller=index');
}

function update_ajaxAction(){
	$id = $_POST['id'];
	$qty = $_POST['qty'];
		#get info product
	$itemm = get_product_by_id($id);
	$item = array_shift($itemm);

	if(isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
	//update cart
		$_SESSION['cart']['buy'][$id]['qty'] = $qty;

	//update total money
		$sub_total = $qty * $item['prices'];
		$_SESSION['cart']['buy'][$id]['sub_total'] = $sub_total;

	//update all shopping cart
		update_info_cart();

	//get total value in shopping cart
		$total = get_total_cart();

	// value return
		$data = array(
			'sub_total' => currency_format($sub_total),
			'total' => currency_format($total)
		);
		echo json_encode($data);
	}

}

?>