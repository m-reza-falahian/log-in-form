<?php
$connect = mysqli_connect("localhost:3306", "root", "");
$create_db = "CREATE DATABASE log_in";

mysqli_query($connect, $create_db);

mysqli_select_db($connect, "log_in");

$create_table = "CREATE TABLE users (id INT AUTO_INCREMENT , username VARCHAR(20) NOT NULL , password VARCHAR(15) NOT NULL , role VARCHAR(10), PRIMARY KEY(id))";

mysqli_query($connect, $create_table);

$add_default_admin = "INSERT INTO users (id ,username , password,role) VALUES (1 ,'admin' , 'a1b2c3' ,'admin') ";
$add_default_user = "INSERT INTO users (id ,username , password,role) VALUES (2 ,'user' , 'a1b2c3' ,'user') ";

mysqli_query($connect, $add_default_admin);
mysqli_query($connect, $add_default_user);

function select_tb($connect, $tb_n)
{
    $do = "SELECT * FROM $tb_n";
    $result = mysqli_query($connect, $do);
    return (mysqli_fetch_all($result));
}
