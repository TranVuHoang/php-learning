<?php 

?>

<!DOCTYPE html>
<html>

<head>
    <title>Unitop Store</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/> -->
    <link href="public/reset.css" rel="stylesheet" type="text/css" />
    <!-- <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/> -->
    <link href="public/style.css" rel="stylesheet" type="text/css" />
    <link href="public/responsive.css" rel="stylesheet" type="text/css" />

    <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <script src="public/js/main.js" type="text/javascript"></script>
    <script src="public/js/jquery-3.4.1.min.js"></script>
    <script src="public/js/app.js"></script>
</head>

<body>
    <div id="wp_login">
        <div id="wp_form_login">
            <h1 class="page_title">ĐĂNG NHẬP</h1>
            <form id="form_login" action="" method="post">
                <input type="text" name="username" id="username" value="<?php echo set_value('username') ?>"
                    placeholder="Username">
                <p class="error"><?php echo form_error('username'); ?></p>
                <input type="password" name="password" id="password" placeholder="Password">
                <p class="error"><?php echo form_error('password'); ?></p>
                <input type="checkbox" name="remember_me" id="">Ghi nhớ đăng nhập
                <input type="submit" name="btn_login" id="btn_login" value="Đăng nhập">
                <p class="error"><?php echo form_error('account'); ?></p>
            </form>
            <a href="" id="lost_pass">Quên mật khẩu ?</a><br>
            <a href="?">Trở về trang chủ</a>
        </div>

    </div>

</body>

</html>