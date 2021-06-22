<?php 


if(isset($_SESSION['admin'])&& $_SESSION['admin']==true){
    $data = new OrdersController();
    $orders = $data->getAllOrders();
}else{
    Redirect::to("home");
}
    
include('views/admin/dashboard.php');
  
?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-12 mx-auto">
        <h3 class="text-center font-weight-bold"> ORDERS</h3>
            <div class="card bg-light p-3">

            <form id="delete_or_form" action="<?php echo BASE_URL?>deleteOrder" method="post">
            <input type="hidden" name="delete_order_id" id="delete_order_id">
        </form>
            <div class="table-responsive">

                <table class="table table-hover table-inverse">
                    <thead>
                        <tr>
                            <th>Command ID</th>
                            <th>Client ID</th>
                            <th> Product ID </th>
                            <th>Full Name</th>
                           
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th> Prix </th> 
                            <th> Total </th>
                            <th> Date </th> 
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($orders as $order): ?>
                        <tr>
                            <td> <?php echo $order["ord_id"] ?></td>
                            <td> <?php echo $order["client_id"] ?></td>
                            <td> <?php echo $order["prod_id"] ?></td>
                            <td> <?php echo $order["fullname"] ?></td>
                           
                            <td> <?php echo $order["product_name"] ?></td>
                            <td> <?php echo $order["qte"] ?></td>
                            <td> <?php echo $order["price"]  ?> DH</td>
                            <td> <?php echo $order["total"] ?> DH</td>
                            <td> <?php echo $order["date"] ?></td>
                            <td  >
                                <div  class="d-flex flex-row justify-content-center align-items-center   ">

                            
                                <button type="button" onclick="deleteFormorder(<?php echo $order['ord_id'];?>)" class=" btn-danger btn-sm ">
                                Delete
                                </button></div>
                        </td>

                        </tr>
                        
                    <?php endforeach ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>

</div>
