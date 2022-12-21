<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Bài 17: Tổng quan yêu cầu class DB</title>
</head>

<body>
	<h1>HƯỚNG DẪN TẠO LỚP DATABASE OOP PHP</h1>
	<strong>DB</strong>: <br>
	<ul>
		<li>insert()</li>
		<li>get()</li>
		<li>update()</li>
		<li>delete()</li>
	</ul>
	<pre>
		< ?php
			class DB {
				private $conn;

				public function __construct() {
					$this->connection();
				}

				public function connection() {
					$this->conn  = new mysqli(DB, DB_USER, DB_PASS, DB_NAME);
					if($this->conn->connect_error) {
						die("Kết nối không thành công". $this->conn->connect_error);
					}
					// echo "Đã kết nối thành công"
				}

				//real_escape_string
				function escape_string($str) {
					return $this->conn->real_escape_string($str);
				}
				function query($sql) {
					return $this->conn->query($sql);
				}
				//insert
				function insert($table, $data) {
					if(!emtry($data)) {
						foreach ($data as $k => $v) {
							$list_key[] = "$k";
							$list_value[] = $this->escape_string($v);
						}
					}

					$list_key = implode(',', $list_key);
					$list_value = implode(',', $list_value);

					$sql = "INSERT INTO {table} ($list_key)" VALUES ($list_value);

					if($this->query($sql) === TRUE) {
						return $this->conn->insert_id;
					} else {
						echo "Lỗi:". $this->conn->error;
					}
				}

 			}
		 ?>
	</pre>
</body>

</html>