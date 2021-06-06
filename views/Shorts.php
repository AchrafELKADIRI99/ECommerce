<?php 

$data = new ProductController();
$products = $data->getShorts();

?>
      

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
                        <?php echo $product['prod_title']; ?>
                    </div>
               
                <?php 
                    endforeach;
                ?>
                 </div>
                <?php 
                    endif;
                ?>
            </div>
