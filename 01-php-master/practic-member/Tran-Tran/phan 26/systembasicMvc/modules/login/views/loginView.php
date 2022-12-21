
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Xay dung he thong dieu huong co ban</title>
	<link rel="stylesheet" type="text/css" href="public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="public/css/login.css">
</head>
<body>
	<div id="wp-form-login">
		<h1 id="page-title">Đăng nhập</h1>
		<form action="" method="POST" id="form-login" accept-charset="utf-8">
			<input type="text" name="username" id="username" value="<?php echo set_value('username'); ?>" placeholder="username">				
			<!-- xuat ra khi co loi -->
			<?php echo form_error('username') ?>
			<input type="password" name="password" id="password" placeholder="password">					
			<?php echo form_error('password')?>
			<?php echo form_error('login') ?>
			<input type="submit" name="btn_login" id="btn-login" value="Đăng nhập">			
		</form>
		<a href="" title="" id="forget-password">Quên mật khẩu?</a>
		<a href="?mod=login&controller=index&action=register" title="" id="register">Đăng ký</a>
	</div>
</body>