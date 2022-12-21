<!DOCTYPE html>
<html>
    <head>
        <title>Unitop Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="public/css/bootstrap/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/reset.css" rel="stylesheet" type="text/css"/>
        <link href="public/css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <link href="public/responsive.css" rel="stylesheet" type="text/css"/>

        <script src="public/js/jquery-2.2.4.min.js" type="text/javascript"></script>
        <script src="public/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
        <script src="public/js/main.js" type="text/javascript"></script>
        <script src="public/js/jquery-3.4.1.min.js"></script>
        <script src="public/js/app.js"></script>
    </head>
    <body>
        <div id="site">
            <div id="container">
                <div id="header-wp" class="clearfix">
                    <div class="wp-inner">
                        <a href="?mod=home&act=main" title="" id="logo" class="fl-left">UNITOP STORE</a>
                        <div id="btn-respon" class="fl-right"><i class="fa fa-bars" aria-hidden="true"></i></div>
                        <?php
                            if(isset($_SESSION['is_login'])){
                                ?>
                                    <p class="fl-right">
                                        Xin chào <strong><?php echo $_SESSION['user_login']; ?></strong> ( <a href="?mod=users&controller=index&action=logout">Thoát</a> )
                                    </p>
                                <?php
                            }else{
                                ?>
                                    <a href="?mod=users&controller=index&action=login" id="btn-login">LOGIN</a>
                                <?php 
                            }
                        ?>
                        <div id="cart-wp" class="fl-right">
                            <a href="?mod=cart&controller=index&action=index" title="" id="btn-cart">
                                <span id="icon"><img src="public/images/icon-cart.png" alt=""></span>
                                <?php
                                if(isset($num_oder)){
                                    if ($num_oder > 0) {
                                        ?>
                                        <span id="num"><?php echo $num_oder ?></span>
                                        <?php
                                    }else{
                                        ?>
                                        <span id="num"><?php echo 0; ?></span>
                                        <?php
                                    }
                                }   
                                ?>
                            </a>
                        </div>
                    </div>
                </div>