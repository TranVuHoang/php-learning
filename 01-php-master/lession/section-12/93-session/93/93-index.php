<?php
echo "Trang Chu";
echo $isLogin;

if (!isset($isLogin)) // Kiem tra bien isLogin da ton tai chua
	header("Location: 93-index.php"); //Neu chua tồn tại biến $isLogin -> day vao ben trong
else {
	echo $isLogin; // xuat gia tri cua isLogin neu ton tai bien $isLogin
}
