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
        <title>History</title>
        <link rel="stylesheet" href="../styles/historyTabStyle.css">
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
                   <ul><li><a href="logout.php"><img src="../icons/logout.svg"> Logout</a></li></ul>
                </div>

            </div>

            <div class="main_content">
                <img src="../icons/indicator.svg" alt="">
                <div class="header">
                    <h2>History</h2>
                    <p>This is where you see all transactions buy and sales.</p>
                </div>



                <div class="info">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
    </body>
</html>