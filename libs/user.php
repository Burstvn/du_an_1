<?php
require_once 'database.php';

//Kiểm tra user khi login
function check_user($username)
{
    $arr = [
        'username',
        '=',
        $username
    ];
    $user =  query_where('users', $arr);
    if (count($user) > 0) {
        return $user[0];
    }
    return false;
}

//Đăng ký
function register_user($fullname, $username, $email, $password, $role, $address, $phone, $gender, $created_at)
{
    $data = [
        'fullname' => $fullname,
        'username' => $username,
        'email' => $email,
        'password' => $password,
        'role' => $role,
        'address' => $address,
        'phone' => $phone,
        'gender' => $gender,
        'created_at' => $created_at
    ];
    return insert('users', $data);
}

//delete users
function delete_user($id)
{
    return delete('users',$id);
}

//hiển thị tất cả users
function show_all_user()
{
    $sql = 'SELECT * FROM users';
    return query($sql);
}

