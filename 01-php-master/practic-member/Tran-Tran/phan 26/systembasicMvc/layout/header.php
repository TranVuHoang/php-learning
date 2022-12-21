<?php 
$q = "SELECT * FROM `tbl_user`";
global $list_user;
$list_user = db_fetch_array($q);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xay dung he thong dieu huong co ban</title>
    <link rel="stylesheet" href="public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/register.css">
    <link rel="stylesheet" type="text/css" href="public/css/user.css">
    <script type="text/javascript" src="public/js/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div id="wraaper">
        <div id="header">
            <a href="#" title="" id="logo">UNITOP</a>
            <div class="user-login">
                <p>Xin chào <strong><?php if(is_login()) echo info_user('username')?></strong>(<a href="?mod=login&controller=index&action=logout">Thoát</a>) </p>
                <!-- echo info_user('username')  -->
            </div>
            <ul id="main-menu">
                <li><a href="?" title="">Trang chủ</a></li>
                <li><a href="?mod=users&controller=index">User</a></li>
                <li><a href="#" title="">Giới thiệu</a></li>
                <li><a href="#" title="">Tin tức</a></li>               
                <li><a href="" title="">Liên hệ</a></li>                
            </ul>            
        </div>
        <!-- End header -->