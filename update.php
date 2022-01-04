<?php 
include 'connect.php';

    if(isset($_POST['updateno'])){
        $product_no=$_POST['updateno'];

        $sql="Select * from `crud` where no=$product_no";
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
        $uniqueno=$_POST['hiddendata'];
        $category=$_POST['updatecategory'];
        $name=$_POST['updatename'];
        $price=$_POST['updateprice'];
        $stock=$_POST['updatestock'];
        $status=$_POST['updatestatus'];

        $sql="update `crud` set category='$category',name='$name',price='$price',stock='$stock',status='$status' where no=$uniqueno";

        $result=mysqli_query($con,$sql);
    }
?>