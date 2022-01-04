<?php 
include 'connect.php';

if(isset($_POST['deletesend'])){
    $unique=$_POST['deletesend'];

    $sql="delete from `crud` where no=$unique";
    $reqult=mysqli_query($con,$sql);
}

?>