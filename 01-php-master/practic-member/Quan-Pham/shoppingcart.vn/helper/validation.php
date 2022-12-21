<?php 

function form_error($label_field) {
    global $data;
    if (!empty($data['error'][$label_field])) {
        show_array($data['error'][$label_field]);
        return "<p class= 'error'>{$data['error'][$label_field]}</p>";
    }
}

function set_value($label_field) {
    global $$label_field;
    if (!empty($$label_field)) {
        return $$label_field;
    }
}

function is_phone_number($phone) {
    $partten = "/^(09|08|01[2|6|8|9])+([0-9]){8}$/";
    if (!preg_match($partten, $phone, $matchs)) {
        return false;
    }
    return true;
}

function is_fullname($fullname){
    $partten = "/^[A-Za-z_\.]{6,32}$/";
    if(!preg_match($partten,$fullname,$matchs)){
        return false;
    }
    return true;
}
function is_username($username) {
    $partten = "/^[A-Za-z0-9_\.]{6,32}$/";
    if (!preg_match($partten,$username, $matchs)) {
        return false;
    }
    return true;
}

function is_password($password){
    $partten = "/^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/";
    if(!preg_match($partten,$password,$matchs)){
        return false;
    }
    return true;
}

function is_email($email){
    $partten = "/^[A-Za-z0-9_.]{2,32}@([a-zA-Z0-9]{2,12})(.[a-zA-Z]{2,12})+$/";
    if(!preg_match($partten,$email,$matchs)){
        return false;
    }
    return true;
}

