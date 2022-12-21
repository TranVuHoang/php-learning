<?php

function construct() {
    load_model('index');
}

function indexAction() {
    load('helper','format');
    $data['list_users'] = get_list_users();
    $data['num_user'] = get_num_rows("tbl_user");
    load_view('index', $data);
}

function addAction() {
    load('helper', 'validation');

    $data['fullname'] = "";
    $data['username'] = "";
    $data['password'] = "";
    $data['email'] = "";
    $data['income'] = null;
    $data['gender'] = "";
    
    if (isset($_POST['btn_reg'])) {
        $error = array();
    
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống Họ và tên";
        } else {
            $data['fullname'] = $_POST['fullname'];
        }
    
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống Tên đăng nhập";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $data['username'] = $_POST['username'];
            }
        }
    
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống Mật khẩu";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $data['password'] = md5($_POST['password']);
            }
        }
    
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống email";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $data['email'] = $_POST['email'];
            }
        }
        if (empty($_POST['income'])) {
            $error['income'] = "Không được để trống thu nhập";
        } else {
            $data['income'] = $_POST['income'];
        }
        if (empty($_POST['gender'])) {
            $error['gender'] = "Phải chọn giới tính";
        } else {
            $data['gender'] = $_POST['gender'];
        }
    
        if (!empty($error)) {
            $data['error'] = $error;
        } else {
            $data = array(
                'fullname' => $data['fullname'],
                'username' => $data['username'],
                'password' => $data['password'],
                'email' => $data['email'],
                'income' => $data['income'],
                'gender' => $data['gender'],
            );
            db_insert("tbl_user", $data);
        }
    }
    
    load_view('add',$data);
}

function deleteAction(){
    load('helper','url');
    $user_id = $_GET['id'];
    db_delete('tbl_user',"`user_id` = {$user_id}");
    call_function(redirect_to("?mod=users&controller=index"));
}

function updateAction(){
    load('helper','url');
    load('helper', 'validation');

    $user_id = $_GET['id'];

    $data['fullname'] = "";
    $data['username'] = "";
    $data['password'] = "";
    $data['email'] = "";
    $data['income'] = null;
    $data['gender'] = "";
    
    if (isset($_POST['btn_reg'])) {
        $error = array();
    
        if (empty($_POST['fullname'])) {
            $error['fullname'] = "Không được để trống Họ và tên";
        } else {
            $data['fullname'] = $_POST['fullname'];
        }
    
        if (empty($_POST['username'])) {
            $error['username'] = "Không được để trống Tên đăng nhập";
        } else {
            if (!is_username($_POST['username'])) {
                $error['username'] = "Tên đăng nhập không đúng định dạng";
            } else {
                $data['username'] = $_POST['username'];
            }
        }
    
        if (empty($_POST['password'])) {
            $error['password'] = "Không được để trống Mật khẩu";
        } else {
            if (!is_password($_POST['password'])) {
                $error['password'] = "Mật khẩu không đúng định dạng";
            } else {
                $data['password'] = md5($_POST['password']);
            }
        }
    
        if (empty($_POST['email'])) {
            $error['email'] = "Không được để trống email";
        } else {
            if (!is_email($_POST['email'])) {
                $error['email'] = "Email không đúng định dạng";
            } else {
                $data['email'] = $_POST['email'];
            }
        }
        if (empty($_POST['income'])) {
            $error['income'] = "Không được để trống thu nhập";
        } else {
            $data['income'] = $_POST['income'];
        }
        if (empty($_POST['gender'])) {
            $error['gender'] = "Phải chọn giới tính";
        } else {
            $data['gender'] = $_POST['gender'];
        }
    
        if (!empty($error)) {
            $data['error'] = $error;
        } else {
            $data = array(
                'fullname' => $data['fullname'],
                'username' => $data['username'],
                'password' => $data['password'],
                'email' => $data['email'],
                'income' => $data['income'],
                'gender' => $data['gender'],
            );
            db_update('tbl_user',$data,"`user_id` = {$user_id}");
        }
    }
    
    load_view('update',$data);
}

function loginAction(){
    load('helper','validation');
    load('helper','url');
    load('helper','users');

    $data = null;


    if(isset($_POST['btn_login'])){
        $error = array();
    
        if(empty($_POST['username'])){
            $error['username'] = "Không được để trống username";
        }else{
            if(!(strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32)){
                $error['username'] = "Số lượng yêu cầu từ 6 đến 32 ký tự";
            }else{
                if(!is_username($_POST['username'])){
                    $error['username'] = "Username không đúng định dạng";
                }else{
                    $data['username'] = $_POST['username'];
                }
            }
        }
    
        if(empty($_POST['password'])){
            $error['password'] = "Không được để trống password";
        }else{
            if(!(strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32)){
                $error['password'] = "Số lượng yêu cầu từ 6 đến 32 ký tự";
            }else{
                if(!is_password($_POST['password'])){
                    $error['password'] = "Mật khẩu không đúng định dạng";
                }else{
                    $data['password'] = $_POST['password'];
                }
            }
        }
        # login processing
        if(empty($error)){
            if(check_login($data['username'],$data['password'])){
                # Set cookie
                if(isset($_POST['remember_me'])){
                    setcookie('is_login',true,time()+900);
                    setcookie('user_login',$data['username'],time()+900);
                }
                # Set session
                session_start();
                ob_start();
                $_SESSION['is_login'] = true;
                $_SESSION['user_login'] = $data['username'];
                
                call_function(redirect_to("?"));
            }else{
                $error['account'] = "Tên đăng nhập hoặc mật khẩu không đúng";
                $data['error'] = $error;
            }
        }else{
            $data['error'] = $error;
        }
    }

    load_view('login',$data);
}

function logoutAction(){
    load('helper','url');
    
    session_start();
    setcookie('is_login',true,time()-900);
    setcookie('user_login',$username,time()-900);
    unset($_SESSION['is_login']);
    unset($_SESSION['user_login']);
    call_function(redirect_to('?'));
}