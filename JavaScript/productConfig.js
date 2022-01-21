
$(document).ready(function(){
    displayData();
});

//display function
function displayData() {
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
        success:function(data,status) {
            //function to display
            // console.log(status);
            $('#completeModal').modal('hide');
            load_data();
        }
    });
}

//delete record
function deleteProduct(deleteno) {
    $.ajax({
        url:"delete.php",
        type:'post',
        data:{
            deletesend:deleteno
        },
        success:function(data,status){
            load_data();
        }
    });
}

//update function
function updateProduct(updateid){
    $('#hiddendata').val(updateid);

    $.post("update.php", {updateid:updateid}, function(data,status) {
        var userid=JSON.parse(data);
        $('#updatecategory').val(userid.category);
        $('#updatename').val(userid.name);
        $('#updateprice').val(userid.price);
        $('#updatestock').val(userid.stock);
        $('#updatestatus').val(userid.status);
    });

    $('#updateModal').modal("show");
}

//onclick update event Details
function updateDetails(){
    var updatecategory=$('#updatecategory').val();
    var updatename=$('#updatename').val();
    var updateprice=$('#updateprice').val();
    var updatestock=$('#updatestock').val();
    var updatestatus=$('#updatestatus').val();
    var hiddendata=$('#hiddendata').val();

    $.post("update.php", {
        updatecategory:updatecategory,
        updatename:updatename,
        updateprice:updateprice,
        updatestock:updatestock,
        updatestatus:updatestatus,
        hiddendata:hiddendata
        },function(data,status){
        $('#updateModal').modal('hide');
        load_data();
    });
}

function load_data(query) {
    $.ajax({
        url:"search.php",
        method:"post",
        data:{query:query},
        success:function(data)
        {
            $('#result').html(data);
        }
    });
}

function sales_product_update(category) {
    $.ajax({
        url:"salesProductUpdate.php",
        method:"post",
        data:{category:category},
        success:function(data) {
            $("#products").text("");
            for(const name of JSON.parse(data)) {
                $("#products").append("<option>" + name + "</option>");
            }
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