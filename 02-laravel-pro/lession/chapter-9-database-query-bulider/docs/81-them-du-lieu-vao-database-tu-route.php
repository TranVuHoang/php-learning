<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 81: Thêm dữ liệu vào db từ route</title>
</head>
<body>
	<h1>INSERT DỮ LIỆU - QUERY BUILDER</h1>
	<p><strong>Cấu trúc:</strong></p>
	<pre>
		// Bước 1 thêm dòng dưới đây vào web.php trong file(Routes)
		use Illuminat\Support\Facades\DB;
		
		// insert 1 bản ghi
		DB::table('users')->insert(
			['email' => 'tranvuhoangjr@gamil.com', 'user'=> 'Hoang Tran']
		);
		
		// insert nhiều bản ghi
		DB::table('users')->insert(
			['email' => 'tranvuhoangjr@gamil.com']
			['user'=> 'Hoang Tran']
		);
	</pre>
	<p><strong>Note</strong></p>
	key: tên trường trong db ví dụ: 'email', 'user'... <br>
	value:giá trị ta muốn insert vào
</body>
</html>