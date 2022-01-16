<?php
$connect = mysqli_connect("localhost", "root", "", "conpyx");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM products 
	WHERE name LIKE '%".$search."%'
	OR id LIKE '%".$search."%'
	OR category LIKE '%".$search."%'";
}
else
{
	$query = "
	SELECT * FROM products ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>ID</th>
							<th>Category</th>
							<th>Product Name</th>
							<th>Unit price</th>
							<th>Stock</th>
                            <th>Status</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["id"].'</td>
				<td>'.$row["category"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["price"].'</td>
				<td>'.$row["stock"].'</td>
                <td>'.$row["status"].'</td>
				<td>
        			<button class = "btn btn-success" onclick="updateProduct('.$row["id"].')">Update</button>
        			<button class = "btn btn-danger" onclick="deleteProduct('.$row["id"].')">Delete</button>
        		</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>