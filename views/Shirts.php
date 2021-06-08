<?php 

$data = new ProductController();
$products = $data->getShirts();

?>
      
</div>
<div class="col-md-12 text-center">
<a href="<?php echo BASE_URL;?>Products"><button type="button" class="btn btn-light">ALL</button></a>
<a href="<?php echo BASE_URL;?>Shoes"><button type="button" class="btn btn-light">Shoes</button></a>
<a href="<?php echo BASE_URL;?>Shirts"><button type="button" class="btn btn-light">Shirts</button></a>
<a href="<?php echo BASE_URL;?>Shorts"><button type="button" class="btn btn-light">Shoes</button></a>
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
                    </div>
               
                <?php 
                    endforeach;
                ?>
                 </div>
                <?php 
                    endif;
                ?>
            </div>
