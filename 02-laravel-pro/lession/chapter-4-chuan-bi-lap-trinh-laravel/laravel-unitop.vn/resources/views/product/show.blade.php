<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>Hiển thị thông tin sản phẩm có id: {{$id}} </h1>
	<table border="1px solid">
		<thead>
			<tr>
				<td>Giá</td>
				<td>Màu sắc</td>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>{{$price}}</td>
				<td>{{$color[0]}}</td>
			</tr>
		</tbody>
	</table>
</body>
</html>