<?php 
	class User {
		private $username;
		private $password;
		public $db_username = "unitop";
		public $db_password = "unitop!@#";

		public function setInfo($username, $password) {
			$this->username = $username;
			$this->password = $password;
		}
		public function checkLogin() {
			if($this->username == $this->db_username && $this->password == $this->db_password) {
				echo "Chào mừng bạn đến với hệ thống unitop";
			} else {
				echo "User không hợp lệ";
			}
		}
	}
	$a = new User;
	$a->setInfo("unitop", "unitop!@#");
	$a->checkLogin();
 ?>