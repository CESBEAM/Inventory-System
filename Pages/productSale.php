<?php
$sellsproduct = $_POST['sellsproduct']; //name of <input> or <select> element

//Quantity input from Form
$sellsprice = $_POST['sellsprice']; //name of <input> element

//Selecting "stock" value of the product selected
$records = mysqli_query($db,"SELECT stock FROM products where name = .%$sellsproduct. ");

while($data = mysqli_fetch_array($records))
{
    echo $data['stock']; //Show the value from database
}

//Update the stock record
$sql = "UPDATE products SET stock= stock-'$sellsprice' WHERE name = '$sellsproduct' ";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

mysqli_close($db);

?>