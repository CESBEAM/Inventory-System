<?php

$server = "localhost";
$canteenname = "root";
$password = "";
$database ="login_register_accounts";

$conn = mysqli_connect($server, $canteenname, $password, $database);

if (!$conn){
    die("<script>alert('Connection Failed.')</script>");
}

?>