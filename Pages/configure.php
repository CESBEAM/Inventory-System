<?php

$server = "localhost";
$canteen = "root";
$pass = "";
$database ="conpyx";

$conn = mysqli_connect($server, $canteen, $pass, $database);

if (!$conn){
    die("<script>alert('Connection Failed.')</script>");
}

?>