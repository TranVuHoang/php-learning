<?php
function currency_format($number, $suffix = 'đ'){
	return number_format($number).$suffix;
}

function timestamp($item){
	$timestamp = strtotime($item);
	return $timestamp;	
}

function change_date($type_date, $item){
	$date = date($type_date, timestamp($item));
	return $date;
}