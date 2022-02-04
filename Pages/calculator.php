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
        <title>Calculator</title>
        <link rel="shortcut icon" type="image/png" href="icons/favIcon.png">
        <link rel="stylesheet" href="/styles/calPanelStyle.css">
        <link rel="stylesheet" href="/styles/calculatorStyle.css">
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

            .form-inline{
                display: flex;
                padding-left: 62em;
                padding-bottom: 1em;
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
                    <h2>Calculator</h2>
                    <p>Built in simple calculator for the real business man</p>
                    </div>

    <div class="container my-4">  

<div class="calculator card">

    <input type="text" class="calculator-screen z-depth-1" value="" disabled />

    <div class="calculator-keys">

      <button type="button" class="operator btn btn-info" value="+">+</button>
      <button type="button" class="operator btn btn-info" value="-">-</button>
      <button type="button" class="operator btn btn-info" value="*">&times;</button>
      <button type="button" class="operator btn btn-info" value="/">&divide;</button>

      <button type="button" value="7" class="btn btn-light waves-effect">7</button>
      <button type="button" value="8" class="btn btn-light waves-effect">8</button>
      <button type="button" value="9" class="btn btn-light waves-effect">9</button>


      <button type="button" value="4" class="btn btn-light waves-effect">4</button>
      <button type="button" value="5" class="btn btn-light waves-effect">5</button>
      <button type="button" value="6" class="btn btn-light waves-effect">6</button>


      <button type="button" value="1" class="btn btn-light waves-effect">1</button>
      <button type="button" value="2" class="btn btn-light waves-effect">2</button>
      <button type="button" value="3" class="btn btn-light waves-effect">3</button>


      <button type="button" value="0" class="btn btn-light waves-effect">0</button>
      <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
      <button type="button" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

      <button type="button" class="equal-sign operator btn btn-default" value="=">=</button>

    </div>
  </div>
</div>
    </div>
        <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="/JavaScript/calculatorJS.js"></script>
        </script>

    </body>
</html>