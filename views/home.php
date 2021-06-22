<?php $data = new ProductController();
$products = $data->getLatest();
?>

<div class="container">
    
<div class="row">
                <div class="col-2">
                    <h1>Stylish Basketball </h1>
                    <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis, autem? Quidem esse tempora expedita veniam consequuntur, neque aliquid. Eligendi cum optio fuga doloribus nisi. Delectus molestiae alias omnis perspiciatis quas?</p>
                    <a href="<?php echo BASE_URL; ?>Products" class="btn">Explore &#10132;</a>
                </div>
                <div class="col-2">
                    <img src="Images\image1.png">
                </div>
            </div>

</div>
</div>
<!------- cats -------->

<div class="categories">
<div class="small-container">
<h2 class="title"> Products Categories</h2>
<div class="row">

<div class="col-3">
<a href="<?php echo BASE_URL; ?>Shoes"> <img src="Images\cat1.jpg">
    <h4>SHOES</h4></a>
</div>
<div class="col-3">
<a href="<?php echo BASE_URL; ?>Shirts"><img src="Images\cat2.jpg">
    <h4>SHIRTS</h4></a>
</div>
<div class="col-3">
    <a href="<?php echo BASE_URL; ?>Shorts"><img src="Images\cat33.jpg">
    <h4>SHORTS</h4></a>

</div>
</div>
</div>
</div>
<!------- new products -------->
<div class="small-container">
<h2 class="title">New Products</h2>
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
                    <img src="./Images/<?php echo $product["prod_image"];?>"> 
                   

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
</div>




