</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 bg-white">
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($_SESSION as $name => $product) :?>
                    <?php if(substr($name,0,9) == "products_"):?>
                    <tr>
                        <td><?php echo $product['title']; ;?></td>
                        <td><?php echo $product['price'];?></td>
                        <td><?php echo $product['qte'];?></td>
                        <td><?php echo $product["total"];?> dh</td>
                        <td>
                            <form method="post" action="<?php echo BASE_URL;?>cancelcart">
                                <input type="hidden" name="product_id" value="<?php echo $product["id"];?>">
                                <input type="hidden" name="product_price" value="<?php echo $product["total"];?>">
                                <button type="submit" class="btn btn-md btn-danger text-white ">
                                    &times;
                                </button>
                            </form>
                        </td>
                    </tr>
                    <?php endif;?>
                    <?php endforeach;?>
                </tbody>
            </table>
            <div id="paypal-button-container"></div>
            
                <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0 && isset($_SESSION["logged"])):?>
                    <div id="paypal-button-container"></div>
                <?php elseif(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                    <a href="<?php echo BASE_URL;?>sign" class="btn btn-link">Log in to complete your purchases</a>
                <?php endif;?>
        </div>
        
        <div class="col-4 col-md-4 float-right bg-white">
           <table class="table table-bordered">
               <tbody>
                   <tr>
                       <th scope="row">Products</th>
                       <td>
                        <?php echo isset($_SESSION["count"]) ? $_SESSION["count"] : 0;?>
                       </td>
                   </tr>
                   <tr>
                       <th scope="row">Total TTC</th>
                       <td>
                            <strong id="amount" data-amount="<?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0;?>">
                                <?php echo isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0;?> <span class="bb-danger">dh</span>
                            </strong>
                       </td>
                   </tr>
               </tbody>
           </table>
            <?php if(isset($_SESSION["count"]) && $_SESSION["count"] > 0):?>
                <form method="post" action="<?php echo BASE_URL;?>emptycart">
                    <button type="submit" class="btn btn-primary">
                        Clear cart
                    </button>
                </form>
                <form method="post" id="addOrder" action="<?php echo BASE_URL;?>addOrder"></form>
            <?php endif;?>
        </div>
    </div>
</div>




<!-- Add the checkout buttons, set up the order and approve the order -->
<script>
    let amount = document.querySelector('#amount').dataset.amount;
    let finalAmount = Math.floor(amount / 10);
  paypal.Buttons({
    createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: finalAmount.toString()
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      return actions.order.capture().then(function(details) {
        alert('Transaction completed by ' + details.payer.name.given_name);
      });
    }
  }).render('#paypal-button-container'); // Display payment options on your web page
</script>