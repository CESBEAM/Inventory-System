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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
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
                <li><a href="home.php"> <img src="../icons/home.svg"> Home</a></li>
                    <li><a href="productTab.php"><img src="../icons/products.svg"> Products</a></li>
                    <li><a href="statistics.php"><img src="../icons/statistics.svg"> Statistics</a></li>
                    <li><a href="history.php"><img src="../icons/reportHisto.svg"> History</a></li>
                    <li><a href="calculator.php"><img src="/icons/calcIcon.svg"> Calculator</a></li>
                </ul>

                <div class="btn-logout">
                   <ul><li><a href="logout.php"><img src="../icons/logout.svg"> Logout</a></li></ul>
                </div>

            </div>

            <div class="main_content">
                <img src="../icons/indicator.svg" alt="">
                <div class="header">
                    <h2>History</h2>
                    <p>This is where you see all date and time when the product are added.</p>
                </div>

                <div id="result"></div>

                <div class="info">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <script>
             function load_data(query) {
                $.ajax({
                    url:"historyConfig.php",
                    method:"post",
                    data:{query:query},
                    success:function(data)
                    {
                        $('#result').html(data);
                    }
                });
            }

               //search function
               $(document).ready(function(){
            load_data();

            $('#search_text').keyup(function() {
                var search = $(this).val();
                if(search != '') {
                    load_data(search);
                }
                else {
                    load_data();
                }
            });
        });
        </script>
    </body>
</html>