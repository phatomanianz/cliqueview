<?php

$sname = "localhost";
$ename = "root";
$password = "";

$db_name = "my_db";

$conn = mysqli_connect($sname, $ename, $password, $db_name);

if(!$conn) {
    echo "Connection Failed!";
    exit();
}