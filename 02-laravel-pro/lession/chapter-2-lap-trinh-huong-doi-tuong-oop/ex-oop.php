<?php
// Bài tập OOP
class User
{
	private $username;
	private $password;
	private $db_username = "unitop";
	private $db_password = "unitop!@#";

	public function setInfo($username, $password)
	{
		// Nhập giá trị cho $username, $password
		$this->username = $username;
		$this->password = $password;
	}
	function checkLogin()
	{
		// kiểm tra thông tin nhập vào với thông tin $db_usenname và $db_password
		if (($this->username == $this->db_username) && ($this->password == $this->db_password))
			echo "Xin chào Unitop";
		else {
			echo "User không tồn tại trên hệ thống";
		}
		/*
		 * Nếu khớp thông tin: Xuất lên màn hình: xin chào Unitop, ngược lại: xuất lên màn hình: User không tồn tại trên hệ thống*/
	}
}
$u = new User;
$u->setInfo("Hoang", "unitop!@#");
$u->checkLogin();
