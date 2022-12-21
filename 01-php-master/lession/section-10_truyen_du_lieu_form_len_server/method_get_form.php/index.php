<?php 
#lấy dữ liệu từ URL qua phương thức GET 
$mod = $_GET['mod'];
$act = $_GET['act'];
$id = $_GET['id'];

echo "{$mod} - {$act} - {$id}<br/>";


function show_array($data) {
		if(is_array($data)) {
			echo "<pre>";
			print_r($data);
			echo "</pre>";
		}
}

#get dữ liệu từ name: $_GET
if(isset($_GET['btn-seach'])) {
	show_array($_GET["search"]);
	$q = $_GET['search'];
	echo $q;
}


 ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 69: Truyền dữ liệu form phương thức GET </title>
</head>
<body>
	<a href="?mod=product&act=detail&id=1268">Sản phẩm</a>
	<h1>Tìm kiếm</h1>
	<pre>
		<form action="" method="GET">
			Tìm Kiếm: <input type="text" name="search"> 
			<input type="submit" name="btn-seach" value="Search">
		</form>
	</pre>

</body>
</html>