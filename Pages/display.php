<?php 
include 'connect.php';
if(isset($_POST['displaySend'])){
    $table='<table class="table">
    <thead>
      <tr>
        <th scope="col">No.</th>
        <th scope="col">Category</th>
        <th scope="col">Name</th>
        <th scope="col">Unit Price</th>
        <th scope="col">Stock</th>
        <th scope="col">Status</th>
        <th scope="col">Edit/Delete</th>
      </tr>
    </thead>';
    $sql="Select * from `crud`";
    $result=mysqli_query($con,$sql);
    $number=1;
    while($row=mysqli_fetch_assoc($result)){
        $no=$row['no'];
        $category=$row['category'];
        $name=$row['name'];
        $price=$row['price'];
        $stock=$row['stock'];
        $status=$row['status'];
        $table.='<tr>
        <td scope="row">'.$number.'</td>
        <td>'.$category.'</td>
        <td>'.$name.'</td>
        <td>'.$price.'</td>
        <td>'.$stock.'</td>
        <td>'.$status.'</td>
        <td>
        <button class = "btn btn-primary" onclick="updateProduct('.$no.')">Update</button>
        <button class = "btn btn-danger" onclick="deleteProduct('.$no.')">Delete</button>
        </td>
      </tr>';
      $number++;
    }
    $table.='</table>';
    echo $table;
}


?>

