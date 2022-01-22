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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
        <style>
            body{
                background: #f0efee;
            }
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
                <li><img src="../icons/home.svg"> Home</li>
                </a>
                 <a href="productTab.php">
                    <li><img src="../icons/products.svg"> Products</li>
                  </a>
                  <a href="statistics.php">
                    <li><img src="../icons/statistics.svg"> Statistics</li>
                </a>
                <a href="history.php">
                    <li><img src="../icons/reportHisto.svg"> History</li></a>
                    <a href="calculator.php">
                    <li><img src="/icons/calculatorIcon.svg"> Calculator</li>
                    </a>
                </ul>

                <div class="btn-logout">
                    <ul>
                    <a href="logout.php">
                        <li><img src="../icons/logoutIcon.svg"> Logout</li>
                        </a>
                    </ul> 
                </div>

            </div>

            <div class="main_content">
                <img src="../icons/indicator.svg" alt="">
                <div class="header">
                    <h2>Products</h2>
                    <p>This is where you can manage all your products and other stuffs.</p>
                    </div>

                    
                    <!--Add new Product-->
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
                        <option>Launch Food</option>
                        <option>Snacks</option>
                        <option>Drinks</option>
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
                    <option class="badge bg-success">Available</option>
                        <option class="badge bg-danger">Low</option>
                        </select>
                    </div>

                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="addproduct()">Submit</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                   
                       </div>
                    </div>
                </div>
                </div>

                <!--end of Add new product-->

                <!-- sales Modal -->
                <div class="modal fade" id="sellsModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sales Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                    <div class="form-group">
                    <label for="sellscategory">Category</label>
                    <select class="form-control" id="sellscategory" onchange="sales_product_update(this.value);">
                        <option value="Food">Launch Food</option>
                        <option value="Snacks">Snacks</option>
                        <option value="Drinks">Drinks</option>
                        <option value="School">School Supplies</option>
                    </select>
                    </div>

                    <div class="form-group" id="poll">
                    <label for="sellsproduct">Product Tag</label>
                    <select class="form-control" id="products">
                        <option>Select Product</option>
                    </select>
                    </div>

                    <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Quanty</span>
                    </div>
                    <input type="number" class="form-control" id="sellsprice">
                    </div>

                    <div class="form-group">
                    <label for="totalsales">Total Sales: </label>
                   </div>

                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="">Proceed</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                   
                       </div>
                    </div>
                </div>
                </div>

                <!-- update modal -->
                <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                 
                    <div class="form-group">
                    <label for="updatecategory">Category</label>
                    <select class="form-control" id="updatecategory">
                        <option>Launch Food</option>
                        <option>Snacks</option>
                        <option>Drinks</option>
                        <option>School Supplies</option>
                         </select>
                    </div>

                    <div class="form-group">
                    <label for="updatename">Name</label>
                    <input type="text" class="form-control" id="updatename" placeholder="Name of the product">
                   </div>
                
                   
                    <div class="input-group mb-3"> 
                    <div class="input-group-prepend">
                        <span class="input-group-text">Unit Price ₱</span>
                    </div>
                    <input type="number" class="form-control" id="updateprice">
                    </div>

                    <div class="input-group mb-3"> 
                    <div class="input-stock-prepend">
                        <span class="input-group-text">Stock</span>
                    </div>
                    <input type="number" class="form-control" id="updatestock">
                    <select class="status-prepend" id="updatestatus">
                        <option class="badge bg-success">Available</option>
                        <option class="badge bg-danger">Low</option>
                        </select>
                    </div>

                    </div>

                    <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="updateDetails()">Update</button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <input type="hidden" id="hiddendata">
                       </div>
                    </div>
                </div>
                </div>

                <!-- 2 buttons add and sale product -->

                <button type="button" class="btn btn-success mx-5 mt-3 my-3" data-toggle="modal" data-target="#completeModal">
                Add New Product
                </button>

                <button type="button" class="btn btn-primary mx-5 mt-3 my-4" data-toggle="modal" data-target="#sellsModal">
                Sale Product
                </button>

                <a href="report.php">
                <button type="button" class="btn btn-primary">
                Print Report
                </button>
                </a>

                <!-- search bar -->

                <!-- <div class="form-group">
				<div class="input-group">
					<span class="input-group-addon">Search</span>
					<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
				</div>
		    	</div> -->

            <form class="form-inline">
                <label class="material-icons">search</label>
              <input class="form-control mr-sm-2" type="search" id="search_text" placeholder="Search">
             </form>

            <!-- display database table -->

               <!-- No need for displayDataTable -->
               <!-- <div id="displayDataTable"></div> -->
               <div id="result"></div>
             
            </div>
        </div>

        <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="/JavaScript/productConfig.js"></script>
    </body>
</html>