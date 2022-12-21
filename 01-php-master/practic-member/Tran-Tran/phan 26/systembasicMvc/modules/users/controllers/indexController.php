<?php

function construct() {
//    echo "DÙng chung, load đầu tiên";
	load_model('index'); 
}

function indexAction() {
	load('helper','pagging');
	//pagging
	$num_row = get_num_user();
	$total_row = $num_row;
	$num_per_page = 8;
	$num_page = ceil($total_row / $num_per_page);
	$page = isset($_GET['page']) ? $_GET['page']: 1; 
	$start = ($page - 1) * $num_per_page; 
	$list_users = get_list_users($start, $num_per_page);	

	foreach ($list_users as &$user) {
		$user['url_update'] = "?mod=users&controller=index&action=update&id={$user['user_id']}";
		$user['url_delete'] = "?mod=users&controller=index&action=delete&id={$user['user_id']}";
	}
	
	$data = array(
		'list_users' => $list_users,
		'num_page' => $num_page,
		'page' => $page,
		'total_row' => $total_row,
		'start' => $start
	);	 
	load_view('index', $data);
}

function updateAction() {
	if(isset($_POST['btn_update'])){  
		$error = array();
		global $error;
	#check fullname
		if(empty($_POST['fullname'])) {
			$error['fullname'] = "Họ và tên không được bỏ trống!";
		}else {
			$fullname = $_POST['fullname'];
		}	 
	#check password
		if(empty($_POST['password'])) {
			$error['password'] = "Mật khẩu không được để trống!!";
		}else{			
			if(!is_password($_POST['password'])){
				$error['password'] = "Mật khẩu phải viết hoa chữ cái đầu và độ dài từ 6 đến 32 ký tự!";
			}else {
				$password = md5($_POST['password']); 								
			}
		}
	#check re-password
		if(empty($_POST['re_password'])){
			$error['re_password'] = "Phải nhập lại mật khẩu";
		}else {
			$re_password = md5($_POST['re_password']);
			if(!empty($password)){
				if(strcmp($password, $re_password) != 0) {
					$error['re_password'] = "Password nhập lại không trùng khớp, Kiểm tra lại!!!";
				}else{
					$re_password = $_POST['re_password'];
				}
			}			
		}
	#check email		
		if(isset($_POST['email'])){
			$email = $_POST['email'];
		}		
	#check gender
		if(empty($_POST['gender'])){
			$error['gender'] = "Phải chọn giới tính!";
		}else{
			$gender = $_POST['gender'];
		} 
	#conclude
		if(empty($error)){
		//handling update user
			$data = array(
				'fullname' => $fullname,				 
				'password' => $password,
				'email' => $email,
				'gender' => $gender
			);			
			$id = (int)$_GET['id'];			
			$update_user = update_user($data, $id);						
			$result_update = array();
			if($update_user){
				$result_update['result_update'] = "Cập nhật thành công!!";					
			}else{
				$result_update['result_update'] = "Cập nhật thất bại!!";
			}
		}		
	}
	if(isset($result_update)){		
		load_view('update', $result_update);		
	}else{
		$id = (int)$_GET['id'];
		$get_user['user'] = get_user_by_id($id);
		load_view('update', $get_user);
	}	
}

function deleteAction(){
	$id = $_GET['id'];
	$delete = delete_user($id);
	if($delete){
		redirect("?mod=users&controller=index&action=index");
	}
}
