<?php 


if(isset($_SESSION['admin'])&& $_SESSION['admin']==true){
    $data = new ProductController();
    $products = $data->getAllProducts();
}else{
    Redirect::to("home");
}
    
include('views/admin/dashboard.php');
  
?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-12 mx-auto">
            
        <h3 class="text-center font-weight-bold"> Products</h3>

        <div class="form-group">
            <a href="<?php echo BASE_URL?>addProduct" class=" btn-primary btn-sm">
                Ajouter
            </a>
        </div>
        <form id="form" action="<?php echo BASE_URL?>updateProduct" method="post">
            <input type="hidden" name="product_id" id="product_id">
        </form>
        <form id="delete_form" action="<?php echo BASE_URL?>deleteProduct" method="post">
            <input type="hidden" name="delete_product_id" id="delete_product_id">
        </form>
            <div class="card bg-light p-3">
            <div class="table-responsive">

                <table class="table  table-hover table-inverse">
                    <thead>
                        <tr>
                            <th>Product ID</th>
                            <th>Product Title</th>
                            <th> Product Category </th>
                            <th>Product Price</th>
                            <th> Product Quantity </th>
                            <th> Product short description </th>
                            <th> Product Description </th>
                            <th>Product Image</th>
                            <th>Action</th>

                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($products as $product): ?>
                        <tr>
                            <td> <?php echo $product["prod_id"] ?></td>
                            <td> <?php echo $product["prod_title"] ?></td>
                            <td> <?php echo $product["prod_category_id"] ?></td>
                            <td> <?php echo $product["prod_price"] ?> DH</td>
                            <td> <?php echo $product["prod_quantity"] ?></td>
                            <td> <?php echo $product["prod_short_desc"] ?></td>
                            <td> <?php echo substr($product["prod_description"],0,100 )?></td>
                            <td > <?php echo "<img height='100'  width=100'  src=".$product['prod_image'];" class='img-fluid img-thumbnail'> "?> ?></td>
                            <td class="d-flex flex-row justify-content-center align-items-center">
                            <a onclick="submitForm(<?php echo $product['prod_id'];?>)" class=" btn-warning btn-sm mr-150">
                                Modifier
                            </a>
                            <a onclick="deleteForm(<?php echo $product['prod_id'];?>)" class=" btn-danger btn-sm">
                                Supprimer
                            </a>
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
