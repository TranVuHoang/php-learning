<?php
//=============================
// Kieu Du Lieu mang 30/09/2020
//=============================

#Mang 1 chieu
// Mang so chan tu (0-10)
$list_even = array(0 => 0, 1 => 2, 2 => 4, 3 => 6, 4 => 8, 5 => 10);
// Mang 1 chieu viet thu gon:
$listEven = array(0, 2, 4, 6, 8, 10);

#Mang da chieu

// Mang danh sach thanh vien

/*
 * id
 * name
 * age
 */
$list_user = array(
	array(
		'id' 	=> 1,
		'name' 	=> "Tran Vu Hoang",
		'age'	=> 23
	),
	array(
		'id' 	=> 2,
		'name' 	=> "Nguyen Van Anh",
		'age'	=> 20
	)
);

echo "<pre>";
print_r($list_user);
echo "</pre>";
