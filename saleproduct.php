<?php 

session_start();
if (!isset($_SESSION['canteenname'])){
    header("Location: login.php");
}

?> 

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sale Products</title>
        <link rel="shortcut icon" type="image/png" href="icons/favIcon.png">
        <link rel="stylesheet" href="/styles/saleproduct.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

        <style>
            .sidebar a{
                text-decoration: none;
                list-style: none;
                color:white;
            }
            .wrapper .main_content img{
                flex: 1;
                margin-top: 3.5em;
                margin-left: 3em;
                position: absolute;
                width: 3em;
            }
   
         .wrapper .sidebar ul li a{
                text-decoration: none;
                list-style: none;
            }
            .form-control{
                padding-top: 12px;
                width: 15em;
                border-radius: 5px black;
            }
            label{
                padding-top: 17px;
         
            }
            .btn-success,.btn-danger{
                margin-top: 2em;
                width: 5em;
            }
          

        </style>
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
             <h2><?php echo "Welcome! ". $_SESSION['canteenname'];?></h2>
            <ul>
                <a href="home.php"> 
                <li><img src="/icons/home.svg"> Home</li>
                </a>
                 <a href="productTab.php">
                    <li><img src="/icons/products.svg"> Products</li>
                  </a>
                  <a href="statistics.php">
                    <li><img src="/icons/statistics.svg"> Statistics</li>
                </a>
                <a href="history.php">
                    <li><img src="/icons/reportHisto.svg"> History</li></a>
                    <a href="calculator.php">
                    <li><img src="/icons/calculatorIcon.svg"> Calculator</li>
                    </a>
                    <a href="saleproduct.php">
                    <li><img src="/icons/dollar.svg"> Sell Products</li>
                    </a>
                </ul>

                <div class="btn-logout">
                    <ul>
                    <a href="logout.php">
                        <li><img src="/icons/logoutIcon.svg"> Logout</li>
                        </a>
                    </ul> 
                </div>
            </div>

            <div class="main_content">
                <img src="/icons/indicator.svg" alt="">
                <div class="header">
                    <h2>Sell Product</h2>
                    <p>This tab where you can sell the product in different stores.</p>
                </div>

                <div class="sales-info">

            <form method="POST" action="productSale.php">
             <label for="storeName">Store Name</label>
             <input type="text" name= "storeName" class="form-control" id="stores">

             <label for="products">Available Products</label>
             <select name="products" name = "products" id="products" class="form-control">
             <option disable selected>Select Product</option>
            <?php 
                include "connect.php";
                $records = mysqli_query($con, "SELECT name FROM products");
                while($data = mysqli_fetch_array($records))
                {
                    echo "<option value '".$data['name']."'>"
                    .$data['name']."</option>";
                }
            ?>

             </select>

             <label for="quanty">Quanty:</label>
                <input type="number" class="form-control qty" name="quanty" id="quanty">

                <button class="btn btn-success">Confirm</button>
                <button class="btn btn-danger">Clear</button>
             </form>
         </div>
            

                </div>
    </body>
</html>