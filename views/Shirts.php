<?php 

$data = new ProductController();
$products = $data->getShirts();

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
             <img src="./Images/<?php echo $product["prod_image"];?>"> 
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
