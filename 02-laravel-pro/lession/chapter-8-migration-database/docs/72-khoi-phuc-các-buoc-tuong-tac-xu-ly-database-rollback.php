<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 73 khôi phục database rollback</title>
</head>
<body>
	<h1>MIGRATION:ROLLBACK</h1>
	<p>Khôi phục lệnh tạo bảng ở bước trước</p>
	<pre>
		<strong>php artisan migrate:rollback</strong>
	</pre>
	<p>Khôi phục lại CSDL ở một bước cụ thể</p>
	<pre>
		<strong>php artisan migrate:rollback --step=5</strong>
	</pre>
</body>
</html>