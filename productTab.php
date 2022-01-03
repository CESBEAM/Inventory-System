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
        <title>Products</title>
        <link rel="stylesheet" href="../styles/productTabStyle.css">
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
                    <li><a href="history.php"><img src="../icons/history.svg"> History</a></li>
                </ul>

                <div class="btn-logout">
                    <ul><li><a href="logout.php"><img src="../icons/logout.svg"> Logout</a></li></ul> 
                </div>

            </div>

            <div class="main_content">
                <img src="../icons/indicator.svg" alt="">
                <div class="header">
                    <h2>Products</h2>
                    <p>This is where you can manage all your products and other stuffs.</p>
                    </div>

                <!-- Modal -->
                <div class="modal fade" id="completeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                 
                    <div class="form-group">
                    <label for="foodCategory">Category</label>
                    <select class="form-control" id="completecategory">
                        <option>Food</option>
                        <option>Snacks</option>
                        <option>Drinks</option>
                        <option>Launch Food</option>
                        <option>School Supplies</option>
                         </select>
                    </div>

                    <div class="form-group">
                    <label for="nameProduct">Name</label>
                    <input type="text" class="form-control" id="completename" placeholder="Name of the product">
                   </div>
                
                   
                    <div class="input-group mb-3"> 
                    <div class="input-group-prepend">
                        <span class="input-group-text">Unit Price ₱</span>
                    </div>
                    <input type="number" class="form-control" id="completeprice">
                    </div>

                    <div class="input-group mb-3"> 
                    <div class="input-stock-prepend">
                        <span class="input-group-text">Stock</span>
                    </div>
                    <input type="number" class="form-control" id="completestock">
                    <select class="status-prepend" id="completestatus">
                        <option>Available</option>
                        <option>Low</option>
                        </select>
                    </div>

                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="addproduct()">Submit</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                       </div>
                    </div>
                </div>
                </div>

                <button type="button" class="btn btn-primary mx-5 mt-3 my-3" data-toggle="modal" data-target="#completeModal">
                Add New Product
                </button>

               <div id="displayDataTable"></div>


            </div>
        </div>

       

        <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <script>

                //display function
                function displayData(){
                    var displayData="true";
                    $.ajax({
                        url:"display.php",
                        type:'post',
                        data:{
                            displaySend:displayData
                        },
                        success:function(data,status){
                         $('#displayDataTable').html(data);

                        }
                    });
                }

               function addproduct(){
                var categoryAdd=$('#completecategory').val();
                var nameAdd=$('#completename').val();
                var priceAdd=$('#completeprice').val();
                var stockAdd=$('#completestock').val();
                var statusAdd=$('#completestatus').val();

                $.ajax({
                    url:"insert.php",
                    type:'post',
                    data:{
                        categorySend:categoryAdd,
                        nameSend:nameAdd,
                        priceSend:priceAdd, 
                        stockSend:stockAdd, 
                        statusSend:statusAdd,
                    },
                    success:function(data,status){
                        //function to display
                        // console.log(status);
                        displayData();
                    }
                });

                }

        </script>
    </body>
    
</html>