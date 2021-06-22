<?php 

$data = new ProductController();
$products = $data->getAllProducts();

?>
</div>

<div class="small-container">
<br><br>

<div class="row">
                <?php 
                   if(count($products)>0):
                ?>
                <?php 
                        
                   foreach($products as $product):
                    
                   if ( $product['prod_id'] == $_POST['productId']) 
                   {           
                ?>
            
             <div class="col-md-6 ">
                    <img src="./Images/<?php echo $product["prod_image"];?>" class="img-fluid rounded"> 
                         <h4><?php echo $product['prod_title']; ?></h4>
                        <p><?php echo $product['prod_price']; ?> DH </p>
                        <p><?php echo $product['prod_description']; ?> </p>

                        
                       
                    </div>
                    <div class="col-md-4">
                    <h3 class="text-secondary m-3 text-center">
                        Qté : 
                    </h3>
                    <form method="post" action="<?php echo BASE_URL; ?>checkout">
                        <div class="form-groupe">
                            <input type="number" name="product_qte" id="product_qte" class="form-control" value="1">
                            <input type="hidden" name="product_title" value="<?php echo $product['prod_title']; ?>">
                            <input type="hidden" name="product_id" value="<?php echo $product['prod_id']; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary" align="center">
                                Ajouter au panier
                            </button>
                        </div>
                    </from>
                </div>
                <?php 
                    }
                    endforeach;
                ?>
                 </div>
                <?php 
                    endif;
                ?>
                
            </div>
            <br><br>
