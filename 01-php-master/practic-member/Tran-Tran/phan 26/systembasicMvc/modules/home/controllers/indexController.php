
<?php 
function construct(){

}

// $_SESSION['is_login'] = 'tran'; 
// unset($_SESSION['is_login']);

function indexAction(){		
	if(is_login()){
		load_view('index');		
		// load_model('index');
		// $list_user = get_user();
		// show_array($list_user);
	}else{
		redirect("?mod=login&controller=index&action=login");
	}
}

?>
