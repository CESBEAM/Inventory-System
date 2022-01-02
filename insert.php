<?php 
include 'connection.php';

extract($_POST);

if(isset($_POST['categorySend']) && isset($_POST['nameSend']) && isset($_POST['priceSend']) && isset($_POST['stockSend']) && isset($_POST['statusSend'])){

    $sql="insert into `crud` (category,name,Unit Price,Stock,Status)
    values ('$categorySend','$nameSend', '$priceSend', '$stockSend', '$statusSend')";

    $result=mysqli_query($con,$sql);
}


?>