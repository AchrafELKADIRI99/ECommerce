<?php
    if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
        $categories = new CategoriesController();
        $categories = $categories->getAllCategories();
        $productToUpdate = new ProductController();
        $productToUpdate = $productToUpdate->getProduct();
        if(isset($_POST["submit"])){
            $product = new ProductController();
            $product->updateProduct();
        }
    }else{
        Redirect::to("home");
    }
?>
<div class="container">
    <div class="row my-4">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        Edit product
                    </h3>
                </div>
                <div class="card-body text-center justify-content-center">
                    <form method="post" class="mr-1" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text"
                            class="form-control"
                            name="prod_title" 
                            required autocomplete="off" 
                            placeholder="Titre" 
                            value="<?php echo $productToUpdate->prod_title;?>">
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20" autocomplete="off" class="form-control" name="prod_description" 
                            placeholder="Description" id=""><?php echo $productToUpdate->prod_description;?></textarea>
                        </div>
                        <div class="form-group">
                            <textarea row="5" cols="20" autocomplete="off" class="form-control" name="prod_short_desc" 
                            placeholder="Description Courte" id=""><?php echo $productToUpdate->prod_short_desc;?></textarea>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="prod_category_id" id="">
                                <?php foreach($categories as $category) :?>
                                    <option 
                                        <?php echo $productToUpdate->prod_category_id === $category["cat_id"] ? "selected" : "";?>
                                        value="<?php echo $category["cat_id"]?>">
                                        <?php echo $category["cat_title"]?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" autocomplete="off" 
                            class="form-control" name="prod_price" 
                            placeholder="Prix" 
                            value="<?php echo $productToUpdate->prod_price;?>">
                        </div>
                
                        <input type="hidden"
                            name="prod_id" 
                            value="<?php echo $productToUpdate->prod_id;?>">
                        <input type="hidden" name="prod_current_image" 
                            value="<?php echo $productToUpdate->prod_image;?>">
                        <div class="form-group">
                            <input type="number" autocomplete="off" 
                            class="form-control" name="prod_quantity" 
                            placeholder="Quantité"  value="<?php echo $productToUpdate->prod_quantity;?>">
                        </div>
                        <div class="form-group">
                            <img src="./Images/<?php echo $productToUpdate->prod_image;?>" width="400" height="400" alt="" class="img-fluid rounded">
                        </div>
                         <div class="form-group">
                            <input type="file"
                            class="form-control" name="prod_image" >
                        </div>
                        <div class="form-group">
                            <button name="submit" class="btn btn-primary">
                                Valider
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>