<?php 

    $con=new mysqli('localhost','root', 'admin12345', 'conpyx');
    
    if($con){
        echo "Connection Successful";
    }else{
        die(mysqli_error($con));
    }
?>