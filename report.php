<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title>Print report</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<style>
  body{
    background: #f0efee;
  }
  .container{
    margin-top: 3em;
  }
  #print-btn{
    color: white;
    width: 7em;
  }
  h2{
    text-align: center;
    margin-bottom: 1em;
  }
  @media print{
    .disprint, .disprint *{ 
      display: none;
    }
  }
</style>
<body>

<div class="container">
  <div>
    <div class="col-md-12">
      <h2>Product List</h2>
      <table class="table table-bordered print">
        <thead>
          <tr>
            <th>No. of Products</th>
            <th>ID</th>
            <th>Category</th>
            <th>Product Name</th>
            <th>Unit Price</th>
            <th>Stock</th>
            <th>Status</th>
            <th>Date/Time</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sn=1;
          $user_qry="SELECT * from products";
          $user_res=mysqli_query($con,$user_qry);
          while($user_data=mysqli_fetch_assoc($user_res))
          {
          ?>
          <tr>
            <td><?php echo $sn; ?></td>
            <td><?php echo $user_data['id']; ?></td>
            <td><?php echo $user_data['category']; ?></td>
            <td><?php echo $user_data['name']; ?></td>
            <td><?php echo $user_data['price']; ?></td>
            <td><?php echo $user_data['stock']; ?></td>
            <td><?php echo $user_data['status']; ?></td>
            <td><?php echo $user_data['date_time']; ?></td>
          </tr>
          <?php
          $sn++;
          }
          ?>
        </tbody>
      </table>

      <div class="text-center">
        <a class="btn btn-primary disprint" id="print-btn" onclick="window.print();">Print report</a>
        <a class="btn btn-danger disprint" id="print-btn" onclick="window.location.replace('productTab.php');">Back</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>