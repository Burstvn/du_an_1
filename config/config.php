<?php
define('ROOT', 'http://localhost/duan_1/');

//Kiểm tra xem session có tồn tại chưa
//Nếu tồn rồi thì vào trang quản trị
function check_session()
{
    if (isset($_SESSION['user'])) {
        header('location:' .ROOT);
        die;
    }
    return;
}

//Kiểm tra quyên hạn được vào admin
function check_role()
{
    if (isset($_SESSION['user'])) {
        if ($_SESSION['user']['role'] == 1000) {
            return;
        }
        if ($_SESSION['user']['role'] == 100) {
            header('location: ' . ROOT);
            die;
        }
    }
    //Trường hợp người dùng chưa đăng nhập
    header('location:' . ROOT . 'admin/login.php');
}

//Kiểm tra tài khoản đã đăng nhập chưa
function check_account()
{
    if (isset($_SESSION['user'])) {
        return true;
    }
    return false;
}
