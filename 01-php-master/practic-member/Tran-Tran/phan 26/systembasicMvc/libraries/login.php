<?php 
function is_username($username) {
	$pattern = '/^[A-Za-z0-9_\.]{6,32}$/';
	if(preg_match($pattern, $username, $matchs))
		return true;
	return false;
}

function is_password($password){
	$pattern = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";		
	if(preg_match($pattern, $password, $matchs))
		return true;
	return false;
}

function is_login() {
	if(isset($_SESSION['is_login'])){
		return true;
	}else{
		return false;
	}
}

function is_email($email) {
	if(filter_var($email, FILTER_VALIDATE_EMAIL))	
		return true;
	return false;
}

function info_user($field = 'id') {
	global $list_user;
	if(isset($_SESSION['is_login'])){
		foreach ($list_user as $user) { 
			if($_SESSION['user_login'] == $user['username']){ 
				if(array_key_exists($field, $user)){ 
					return $user[$field];
				}
			}
		}
	}
	return false;
}

function show_gender($gender){
	$list_gender = array(
		'male' => 'Nam',
		'female' => 'Nữ'
	);

	if(array_key_exists($gender, $list_gender)){
		return $list_gender[$gender];
	}
}

// function check_login($username, $password) {
// 	if($username == 'trantran' && $password == 'trantran!@#'){
// 		return true;
// 	}else {
// 		return false;
// 	} 
// }

function form_error($label_field){
	global $error;
	if(!empty($error[$label_field])) {
		return "<p class='error'>{$error[$label_field]}</p>";
	}
}

function set_value($label_field) {
	global $error;
	if(isset($_POST[$label_field]) && empty($error[$label_field])){
		return $_POST[$label_field];
	}
}

function is_value_update($btn_form){
	if(!isset($_POST[$btn_form]))
		return true;
	return false;
}
function select_gender($label_field, $gender) {
	if(!empty($_POST[$label_field]) && $_POST[$label_field] == $gender){
		echo "selected = select";
	}
}

function is_male($btn, $gender){
	if(!isset($_POST[$btn]) && $gender == "male")
		echo "selected = select";
}

function is_female($btn, $gender){
	if(!isset($_POST[$btn]) && $gender == "female")
		echo "selected = select";	
}

?>