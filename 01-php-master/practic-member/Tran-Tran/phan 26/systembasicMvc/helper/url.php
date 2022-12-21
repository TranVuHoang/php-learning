<?php 
function redirect($url = '?mod=home&controller=index'){
	if(!empty($url)) {
		header("Location:".$url);
	}
}
?>
