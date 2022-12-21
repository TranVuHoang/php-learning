<?php 
function construct(){
	load('helper','format');
	load_model('index');
}

function indexAction(){
	$id = (int)$_GET['id'];	
	$page = get_page_by_id($id);
	// remove key of $page
	$info_page = array_shift($page); 
	$item['item'] = $info_page;
	load_view('about', $item);
}

?>