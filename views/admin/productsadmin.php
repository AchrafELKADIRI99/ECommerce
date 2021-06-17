<?php 


if(isset($_SESSION['admin'])&& $_SESSION['admin']==true){
    $categories = new CategoriesController();
    $categories = $categories->getAllCategories();
    $data = new ProductController();
    $products = $data->getAllProducts();
    if(isset($_POST["submit"])){
        $productadd = new ProductController();
        $productadd->newProduct();
    }
}else{
    Redirect::to("home");
}
    
include('views/admin/dashboard.php');
  
?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-12 mx-auto">
            
        <h3 class="text-center font-weight-bold"> Products</h3>
        <div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                        <button type="button" style=" border-radius:3.25em;" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <div class="row justify-content-center">



                    <form method="post" class="mr-1" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="text"
                            class="form-control"
                            name="prod_title" required autocomplete="off" placeholder="Product Title" id="">
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20" autocomplete="off" class="form-control" name="prod_description" 
                            placeholder="Description" id=""></textarea>
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20" autocomplete="off" class="form-control" name="prod_short_desc" 
                            placeholder="Short Description" id=""></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="prod_category_id" id="">
                                <?php foreach($categories as $category) :?>
                                    <option value="<?php echo $category["cat_id"]?>">
                                        <?php echo $category["cat_title"]?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" autocomplete="off" 
                            class="form-control" name="prod_price" 
                            placeholder="Price" id="">
                        </div>
                   
                        <div class="form-group">
                            <input type="number" autocomplete="off" 
                            class="form-control" name="prod_quantity" 
                            placeholder="Quantity" id="">
                        </div>
                         <div class="form-group">
                            <input type="file"
                            class="form-control" name="prod_image" >
                        </div>
                        <div class="form-group">
                            <button name="submit" class=" btn-primary">
                                Save
                            </button>
                        </div>
                    </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" style=" border-radius:3.25em;" class=" btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </div>
            </div>
        </div>

        </br>
        <div style="margin-left: 9%;" class="btn-group" role="group" aria-label="Basic example"><button type="button"  id="Modal" class=" btn-primary" data-bs-toggle="modal" data-bs-target="#productModal">
                ADD
            </button></div>
        <div class="form-group">
           
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
                            <th >Product ID</th>
                            <th >Product Title</th>
                            <th > Product Category </th>
                            <th >Product Price</th>
                            <th > Product Quantity </th>
                            <th > Product short description </th>
                            <th > Product Description </th>
                            <th >Product Image</th>
                            <th >Action</th>

                          
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($products as $product): ?>
                        <tr>
                            <td > <?php echo $product["prod_id"] ?></td>
                            <td > <?php echo $product["prod_title"] ?></td>
                            <td > <?php echo $product["prod_category_id"] ?></td>
                            <td > <?php echo $product["prod_price"] ?> DH</td>
                            <td > <?php echo $product["prod_quantity"] ?></td>
                            <td > <?php echo $product["prod_short_desc"] ?></td>
                            <td > <?php echo substr($product["prod_description"],0,100 )?></td>
                            <td  >                     

                            <img height="100"  width="100"  src="./Images/<?php echo $product["prod_image"];?>" class='img-fluid img-thumbnail'> </td>
                            <td  >
                                <div  class="d-flex flex-row justify-content-center align-items-center   ">
                            <a onclick="submitForm(<?php echo $product['prod_id'];?>)" class=" btn-warning btn-sm mr-150">
                                Modifier
                            </a>
                            <a onclick="deleteForm(<?php echo $product['prod_id'];?>)" class=" btn-danger btn-sm">
                                Delete
                            </a></div>
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
