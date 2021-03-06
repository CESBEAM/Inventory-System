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
        <title>Statistics</title>
        <link rel="shortcut icon" type="image/png" href="icons/favIcon.png">
        <link rel="stylesheet" href="/styles/statisticsTabStyle.css">
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
                    <h2>Statistics</h2>
                    <p>This is where you can see all productivity grow.</p>
                </div>

                <div class="header-sales">
                    <h3>Sales Information</h3>
                </div>

                <div class="sales-info">
                    <div>Sales Stuff</div>
                    <div>Total Sales Today</div>
                    <div>Total Sales This Week</div>
                    <div>Total Sales This Month</div>
                    <div>Average Sales Per Month</div>
                </div>
            </div>
        </div>
    </body>
</html>