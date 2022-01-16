<?php 
include 'connect.php';

    if(isset($_POST['updateid'])){
        $product_id=$_POST['updateid'];

        $sql="Select * from `products` where id=$product_id";
        $result=mysqli_query($con,$sql);
        $response=array();
        while($row=mysqli_fetch_assoc($result)){
            $response=$row;
        }
        echo json_encode($response);
    }else{
        $response['status']=200;
        $response['message']="Invalid or data not found";
    }


    // update query

    if(isset($_POST['hiddendata'])){
        $uniqueid=$_POST['hiddendata'];
        $category=$_POST['updatecategory'];
        $name=$_POST['updatename'];
        $price=$_POST['updateprice'];
        $stock=$_POST['updatestock'];
        $status=$_POST['updatestatus'];

        $sql="update `products` set category='$category',name='$name',price='$price',stock='$stock',status='$status' where id=$uniqueid";

        $result=mysqli_query($con,$sql);
    }
?>