<?php 

$data = new ProductController();
$products = $data->getAllProducts();

?>
      
</div>

<div class="small-container">

<div class="row">
                <?php 
                   if(count($products)>0):
                ?>
                <?php 
                   foreach($products as $product):
                ?>
            
             <div class="col-4 ">
                    <img src="<?php echo $product['prod_image']; ?>"> 
                         <h4><?php echo $product['prod_title']; ?></h4>
                        <p><?php echo $product['prod_price']; ?> DH </p>
                        <button type="button" class="btn btn-warning"><a href="">Add to cart</a></button>

                    </div>
               
                <?php 
                    endforeach;
                ?>
                 </div>
                <?php 
                    endif;
                ?>
            </div>
