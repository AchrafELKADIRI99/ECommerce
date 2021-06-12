<?php 

$data = new ProductController();
$products = $data->getAllProducts();

?>

<div class="small-container">

<div class="row">
                <?php 
                   if(count($products)>0):
                ?>
                <?php 
                        
                   foreach($products as $product):
                    
                   if ( $product['prod_id'] == $_POST['productId']) 
                   {           
                ?>
            
             <div class="col-4 ">
                    <img src="<?php echo $product['prod_image']; ?>"> 
                         <h4><?php echo $product['prod_title']; ?></h4>
                        <p><?php echo $product['prod_price']; ?> DH </p>
                        <p><?php echo $product['prod_description']; ?> DH </p>

                        
                       
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
