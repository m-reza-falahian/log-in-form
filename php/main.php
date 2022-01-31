<?php
include './mysql.php';

$users_len = count(select_tb($connect, "users"));
$login_st = false;


$username = $_POST["user-name"];
$password = $_POST["password"];


if (!$_POST["user-name"] == "") {
    for ($i = 0; $i < $users_len; $i++) {
        if ($username == select_tb($connect, "users")[$i][1]  && $password == select_tb($connect, "users")[$i][2]) {
            $login_st = true;
            if (select_tb($connect, "users")[$i][3] == "admin") {
                header("Location:http://localhost:7000/admin/admin.php");
            } elseif (select_tb($connect, "users")[$i][3] == "user") {
                header("Location:http://localhost:7000/user/user.php");
            }
            break;
        }
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
        header("Location:http://localhost:7000");
    }
}
