<style>
	update{
		cursor: pointer;
		position: absolute;
		
		color: #6f42c1;
	}	
	delete{
		cursor: pointer;
		position: absolute;
		color: #dc3545;
		margin-left: 2.1em;
	}
</style>

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
							<th>Edit / Delete</th>
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
        			<update class = "material-icons" onclick="updateProduct('.$row["id"].')">edit</update>
				
        			<delete class = "material-icons" onclick="deleteProduct('.$row["id"].')">delete</delete>
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