<?php 
#bai tap 1
//Tao bien luu truc danh sach thanh vien
	$list_user = array(
		1 => array(
			'id' 	=> 1,
			'name'	=> "Hoang",
			'birthday'=> 1997,
			'weight' => 50
		), 
		2 => array(
			'id' 	=> 2,
			'name'	=> "Cuong",
			'birthday'=> 1978,
			'weight' => 60
		)
	);
// Tao bien luu tru danh sach san pham
	$list_product= array();


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>bai tap thuc hanh 4</title>
 </head>
 <body>
 	<label for="">
 		<p>Tôi là  <strong><?php echo $list_user[1]['name']; ?></strong>, sinh nam <?php echo $list_user[1]['birthday']; ?>, can nang <strong><?php echo $list_user[1]['weight']; ?></strong></p>
 	</label>
 </body>
 </html>