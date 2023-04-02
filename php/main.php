<?php
include './mysql.php';

$login_st = false;


$username = $_POST["user-name"];
$password = $_POST["password"];


if (!$_POST["user-name"] == "") {
    $result = select_user($connect, 'users', $username);
    if ($result["password"] == $password) {
        $login_st = true;
        if ($result["role"] == "admin")
            header("Location:http://localhost:8000/admin/admin.php");
        elseif ($result["role"] == "user")
            header("Location:http://localhost:8000/user/user.php");
    }
    if ($login_st == false) {
        setcookie(
            'log_in_status',
            'user_not_found',
            [
                'expires' => time() + '3600',
                'path' => '/'
            ]
        );
        header("Location:http://localhost:8000");
    }
}
