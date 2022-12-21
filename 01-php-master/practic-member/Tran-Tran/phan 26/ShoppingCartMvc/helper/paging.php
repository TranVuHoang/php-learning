<?php 
function get_paging($num_page, $page, $base_url = "") {
	$str_paging = "<ul class = paging>";
	#page prev
	if($page > 1) {
		$page_prev = $page - 1;
		$str_paging .= "<li><a href='{$base_url}&page={$page_prev}'><</a></li>";
	}
	#browser the page
	for($i = 1; $i <= $num_page; $i++) {
		$active = "";
		if($i == $page) $active="active";
		$str_paging .= "<li class={$active}><a href='{$base_url}&page={$i}'> {$i} </a></li>";
	}
	#page next
	if($page < $num_page) {
		$page_next = $page + 1;
		$str_paging .= "<li><a href='{$base_url}&page={$page_next}'>></a></li>";
	}
	$str_paging .= "</ul>";
	echo $str_paging;
}

?>