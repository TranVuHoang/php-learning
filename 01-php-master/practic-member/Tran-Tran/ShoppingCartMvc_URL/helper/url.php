<?php

function base_url($url = "") {
    global $config;
    return $config['base_url'].$url;
}

function redirect($path = "?mod=home&controller=index") {
	if(!empty($path)){
		header("Location: ".$path);
	}
}

