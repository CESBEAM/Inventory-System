<?php 

    $con=new mysqli('localhost','root','','conpyx');
    
    if(!$con){
        die(mysqli_error($con));
    }
?>