<?php
/*
 * --------------------------------
 * EMAIL
 * --------------------------------
 * Trong phần này chúng ta khai báo các thông số để cấu hình
 * gửi mail bằng php
 * --------------------------------
 * GIẢI THÍCH BIẾN
 * --------------------------------
 * protocol: Giao thức gửi mail
 * smtp_host: Host gửi mail
 * smtp_port: Cổng
 * smtp_user: Tên đăng nhập tài khoản gửi mail
 * smtp_pass: Password tài khoản gửi mail
 * smtp_port: Cổng
 * mailtype: Định dạng nội dung mail
 * charset: Mã ký tự nội dung mail(UTF-8)
 */

// $config_email = Array(
//     'protocol' => 'smtp',
//     'smtp_host' => 'ssl://smtp.googlemail.com',
//     'smtp_port' => 465,
//     'smtp_user' => 'thanhlan9962@gmail.com',
//     'smtp_pass' => 'tuankhanh970423',
//     'smtp_timeout' => '7',
//     'mailtype' => 'html',
//     'charset' => 'UTF-8'
// );

$config_email = array(
    'host' => 'smtp.gmail.com',
    'fullname' => 'UNISTOP store',
    'username' => 'thanhlan9962@gmail.com',
    'password' => 'tuankhanh970423',
    'smpt_secure' => 'tls',
    'port' => 587,
);


