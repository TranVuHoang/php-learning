<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 75</title>
</head>
<body>
	<h1>TẠO CÁC TRƯỜNG(cột) CỦA TABLE</h1>
	<table border="1px solid">
		<thead>
			<tr>
				<td>CÚ PHÁP</td>
				<td>MÔ TẢ</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>$table->id()</td>
				<td>Tương đương $table->bigIncrements('id):Tạo số nguyên lớn và tự động tăng</td>
			</tr>
			<tr>
				<td>$table->foreignId('user_id)</td>
				<td>Tương đương $table->unsignedBigInteger('user_id'):Tạo số nguyên lớn, không dấu</td>
			</tr>
			<tr>
				<td>$table->bigIncrements('id)</td>
				<td>Tương đương $table->id(): Trường tự động tăng, được thiết lập làm khóa chính</td>
			</tr>
			<tr>
				<td>$table->Increments()</td>
				<td>Trường tự động tăng UNSIGNED INT, được thiết lập làm khóa chính</td>
			</tr>
			<tr>
				<td>$table->string('name', 100)</td>
				<td>Thiết lập trường với kiểu dữ liệu varchar với độ dài 100 ký tự</td>
			</tr>
			<tr>
				<td>$table->char('name', 100)</td>
				<td>Trường lưu chuỗi ngắn</td>
			</tr>
			<tr>
				<td>$table->text('description')</td>
				<td>Thiết lập trường với kiểu dữ liệu text, chứa đoạn văn bản số lượng ký tự lớn</td>
			</tr>
			<tr>
				<td>$table->json('options')</td>
				<td>Trường tạo kiểu dữ liệu json {"k1":"value","k2":10}</td>
			</tr>
			<tr>
				<td>...</td>
				<td>...</td>
			</tr>	
			<tr>
				<td>$table->timestemps()</td>
				<td>Tạo 2 trường created_at và updated_at</td>
			</tr>
			<tr>
				<td>$table->enum('', '')</td>
				<td>Tạo trường bao gồm tập hợp giá trị cho trước</td>
			</tr>
			
			<tr>
				<td>$table->boolean()</td>
				<td>Lưu trữ dữ liệu có 2 giá trị true/false</td>
			</tr>
			<tr>
				<td>$table->flaot('amont', 8, 2)</td>
				<td>Lưu trữ giá trị float</td>
			</tr>
			<tr>
				<td>$table->int('vote')</td>
				<td>Lưu trữ giá trị int</td>
			</tr>
			<tr>
				<td>$table->dateTime('create_at', 0)</td>
				<td>Lưu trữ dữ liệu thời gian '0000-00-00 00:00:00'</td>
			</tr>
		</tbody>
	</table>
</body>
</html>