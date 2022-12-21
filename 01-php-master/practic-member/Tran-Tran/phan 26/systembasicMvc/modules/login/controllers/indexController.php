<?php 
function construct(){
	
}

function loginAction(){	
	load_model('login');
	if(isset($_POST['btn_login'])){
		$error = array();
		global $error;
	#check username
		if(empty($_POST['username'])) {
			$error['username'] = "Tên tài khoản không được để trống!!";
		}else{			
			if(!is_username($_POST['username'])){
				$error['username'] = "Tên tài khoản chỉ gồm số và chữ cái, độ dài từ 6 - 32";
			}else{
				$username = $_POST['username'];
			}		
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
	#conclude
		if(empty($error)){
		//handling login			
			if(check_info_login($username, $password)){							
				$_SESSION['is_login'] = true;
				$_SESSION['user_login'] = $username;				
				redirect();				
			}else{				
				$error['login'] = "Sai tai khoan hoac mat khau!!!";
			}				 
		}		
	}

	if(!empty($error)){
		$arr_error['error'] = $error;
		load_view('login',$arr_error);
	}else{
		load_view('login');
	}
}

function registerAction() {	
	load_model('register');

	if(isset($_POST['btn_reg'])){  
		$error = array();
		global $error;
	#check fullname
		if(empty($_POST['fullname'])) {
			$error['fullname'] = "Họ và tên không được bỏ trống!";
		}else {
			$fullname = $_POST['fullname'];
		}
	#check username
		if(empty($_POST['username'])) {
			$error['username'] = "Tên tài khoản không được để trống!!";
		}else{			
			if(!is_username($_POST['username'])){
				$error['username'] = "Tên tài khoản chỉ gồm số và chữ cái, độ dài từ 6 - 32";
			}else{
				$username = $_POST['username'];
			}		
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
		//handling login
			$data = array(
				'fullname' => $fullname,
				'username' => $username,
				'password' => $password,
				'email' => $email,
				'gender' => $gender
			);			
			$add_user = add_user($data);
			$result_add = array();
			if($add_user){
				$result_add['result_add'] = "Thêm thành công!!";					
			}else{
				$result_add['result_add'] = "Thêm thất bại";
			}
		}		
	}
	if(isset($data)){
		load_view('register', $result_add);
	}else{
		load_view('register');
	}
}

function logoutAction(){
	unset($_SESSION['is_username']);
	unset($_SESSION['is_login']);
	redirect();
}

function indexAction(){
}

?>
