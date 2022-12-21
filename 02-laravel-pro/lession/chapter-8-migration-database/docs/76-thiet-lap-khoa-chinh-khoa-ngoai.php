<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<p>Nâng cao của migration giúp tạo ra mối liên kết giữa các bảng với nhau</p>
	<pre>Vidu: có bảng về bài viết, trong bài viết ta cần phải biết cái bài viết này được ai tạo ra, để truy vết lại và hiển thị thông tin của người tạo -> cần có liên kết giữa bảng post và bảng user
		trong bảng post cần tạo khóa ngoại: user_id(post)
		được kết nối với trường khóa chính: id bên bảng user(user) </pre>
	<p>Cú pháp</p>
	<pre>
		<strong>
			Schema::table('post') {
				$table->unsignedBigInteger('user_id'); // tạo khóa ngoại(trường dữ liệu user_id)
			// thiết lập mối quan hệ bảng user và bảng post
			$table->foreign('user_id')->refrences('id')->on('users');
			});
		</strong>
	</pre>
	<p><strong>Quy tắc xóa dữ liệu bảng kết nối</strong></p>
	<pre>
		Schema::table('post', function(Boolean $table)) {
			$table->foreignId('user_id')
			->constrained()
			->onDelete('cascade')
		});
	</pre>
</body>
</html>