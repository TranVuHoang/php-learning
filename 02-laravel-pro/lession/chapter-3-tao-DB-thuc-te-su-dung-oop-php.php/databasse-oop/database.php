<?php
require "config.php";
class DB
{
	// thuộc tính đại diện cho quá trình kết nối database
	public $conn;

	// phương thức kết nối CSDL
	public function connection()
	{
		// câu lệnh kết nối CSDL
		$this->conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		// kiểm tra quá trình kết nối CSDL đã thành công chưa
		if ($this->conn->connect_error) {
			die("Kết nối csdl không thành công:" . $this->conn->connect_error);
		} else {
			echo "Đã kết nối CSDL thành công<br/>";
		}
	}
	// phương thức tự động kết nối CSDL
	public function __construct()
	{
		$this->connection();
	}

	// phương thức tạo bộ lọc cho chuỗi truy vấn(bảo mật)
	function escape_string($str)
	{
		return $this->conn->real_escape_string($str);
	}

	// phương thức chạy chuỗi truy vấn(run query)
	function query($sql)
	{
		return $this->conn->query($sql);
	}

	//Insert
	public function insert($table, $data)
	{
		//			INSERT INTO table_name(`colummn1`, `colummn2`,...)
		//			VALUES ('value1', 'value2', 'value3');
		foreach ($data as $k => $v) {
			// đưa tất cả key vào trong list_field
			$list_field[] = "`$k`";
			// đưa tất cả value vào trong list_value
			$list_value[] = "'{$this->escape_string($v)}'";
		}

		//nối tất cả các phần tử mảng với nhau
		$list_field = implode(', ', $list_field);
		$list_value = implode(', ', $list_value);

		$sql = "INSERT INTO {$table}({$list_field}) VALUES ({$list_value})";
		// chạy chuỗi truy vấn
		if ($this->query($sql) == TRUE) {
			return $this->conn->insert_id;
		} else {
			echo "Lỗi:" . $this->conn->error;
		}
	}

	// select nhiều bản ghi
	// SELECT column1, column2,...
	// FROM table_name WHERE ...
	function get($table, $field = array(), $where = "")
	{
		//$table: tên bản
		// $field: danh sách cột ('column1', 'column2', ...)
		//
		$field = !empty($field) ? implode(', ', $field) : "*";
		$where = !empty($where) ? "WHERE {$where}" : "";

		$sql = " SELECT {$field} FROM {$table} {$where}";

		// echo $sql;

		$result = $this->query($sql);

		// kiểm tra truy vấn có bao nhiêu bản ghi
		if ($result->num_rows > 0) {
			$data = array();

			while ($row = $result->fetch_assoc()) { // trog khi dữ liệu đang còn có
				$data[] = $row; // row từng dòng của bản ghi, nạp vào trog mảng tổng $data[]
			}
			if (count($data) > 1)
				return $data;
			return $data;
		} else {
			echo "Không tìm thấy bản ghi nào";
		}
	}
	// update
	// UPDATE table_name
	// SET 		column1 = value1, column2 = value2,...
	// WHERE 	condition
	function update($table, $data = array(), $where)
	{
		$data_search = array();
		foreach ($data as $k => $v) {
			//  đưa về dạng column1 = value1
			$data_search[] = "`{$k}` = '{$v}'";
		}
		$data_search = implode(', ', $data_search);

		$where = !empty($where) ? "{$where}" : "";
		$sql = "UPDATE {$table} SET {$data_search} WHERE {$where}";
		// echo $sql."<br/>";
		if ($this->query($sql) == true) {
			echo "Cập nhật thành công";
		} else {
			echo "Lỗi" . $this->conn->error;
		}
	}
	//
	// DELETE
	// DELETE FROM table_name WHERE condition
	function delete($table, $where = "")
	{
		$where = !empty($where) ? "{$where}" : "";
		$sql = "DELETE FROM {$table} WHERE {$where}";

		// echo $sql."<br/>";

		if ($this->query($sql) == true) {
			echo "Xóa thành công";
		} else {
			echo "Lỗi:" . $this->conn->error;
		}
	}
}


// insert
// $db = new DB;
// $data = array(
// 	'username'	=> 'Lương Trinh',
// 	'password'	=> md5('trinhbuonga!@#')
// );
// echo $db ->insert('users', $data);


// update
// $db = new DB;
// $data = array(
// 	'username'	=> 'Trần Vũ Hoàng',
// 	'password'	=> md5('hong!@#')
// );
// echo $db->update('users', $data, 'id = 4')

// select
// $users = $db -> get('users',"");

// echo "<pre>";
// print_r($users);
// echo "</pre>";
// delete
$db = new DB;
	// $db -> delete('users', 'id = 1');
