<?php 
require_once "connect.php";

$storeName = $products = $quanty = $total_price = $date_time;

$storeName = $_POST['storeName'];
$products = $_POST['products'];
$quanty = $_POST['quanty'];
$total_price = $_POST['total_price'];
$date_time = $_POST['date_time'];

if($products == 'name'){
    $total_price = $quanty * $name;
}

$sql = "INSERT INTO transactions (store_name, products,quanty,total_price,date_time) VALUES
('$storeName','$products','$quanty','$total_price', '$date_time')";

if(mysqli_query($con,$sql)){
    echo "successfully sell";
}else{
    echo "Error could not able to execute $sql.".mysqli_error($con);
}

$update = "UPDATE name SET stock = (SELECT SUM(stock)FROM products )-(SELECT SUM(quanty) FROM transactions";



?>