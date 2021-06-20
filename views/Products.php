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
                    $productId = $product['prod_id'];
                ?>
            
             <div class="col-4 ">
             <form  role="button" id="form" onclick="submitForm(<?php echo $productId; ?>)" name="submit" method="post" action="<?php echo BASE_URL;?>singleProduct">
                    <img src="<?php echo $product['prod_image']; ?>"> 
                   

                         <h4 >
                         <?php echo $product['prod_title']; ?>
                         </h4>
                        <p><?php echo $product['prod_price']; ?> DH</p>
                        <input type="hidden" name="productId" id="prodId"  class="btn btn-warning" ></input>
                        </form>
                    </div>
               
                <?php 
                    endforeach;
                ?>
                 </div>
                <?php 
                    endif;
                ?>
             
            </div>
            



