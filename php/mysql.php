<?php
$connect = mysqli_connect("localhost:3306", "root", "");
$create_db = "CREATE DATABASE log_in";

if (!$connect) {
    setcookie(
        'log_in_status',
        'mysql_is_not_conected',
        [
            'expires' => time() + '3600',
            'path' => '/'
        ]
    );
    header("Location:http://localhost:7000");
}

mysqli_query($connect, $create_db);

mysqli_select_db($connect, "log_in");

$create_table = "CREATE TABLE users (id INT AUTO_INCREMENT , username VARCHAR(20) NOT NULL , password VARCHAR(15) NOT NULL , role VARCHAR(10), PRIMARY KEY(id))";

mysqli_query($connect, $create_table);

$add_default_admin = "INSERT INTO users (id ,username , password,role) VALUES (1 ,'admin' , '123456' ,'admin') ";
$add_default_user = "INSERT INTO users (id ,username , password,role) VALUES (2 ,'user' , '123456' ,'user') ";

mysqli_query($connect, $add_default_admin);
mysqli_query($connect, $add_default_user);

function select_user($connect, $tb_n, $user_name)
{
    $do = "SELECT * FROM $tb_n WHERE username = '$user_name'";
    $result = $connect->query($do);
    return ($result->fetch_assoc());
}
