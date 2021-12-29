<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Statistics</title>
        <link rel="stylesheet" href="../styles/statisticsTabStyle.css">
    </head>
    <body>
        <div class="wrapper">
            <div class="sidebar">
            <h2><?php echo "Welcome! ". $_SESSION['canteenname'];?></h2>
                <ul>
                    <li><a href="home.php"> <img src="../icons/home.svg"> Home</a></li>
                    <li><a href="productTab.php"><img src="../icons/products.svg"> Products</a></li>
                    <li><a href="statistics.php"><img src="../icons/statistics.svg"> Statistics</a></li>
                    <li><a href="history.php"><img src="../icons/history.svg"> History</a></li>
                </ul>

                <div class="btn-logout">
                    <ul><li><a href="home.php"><img src="../icons/logout.svg"> Logout</a></li></ul> 
                </div>

            </div>

            <div class="main_content">
                <img src="../icons/indicator.svg" alt="">
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