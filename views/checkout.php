<?php

if(isset($_POST["product_id"])){

    $id = $_POST["product_id"];
    $data = new ProductController();
    $product = $data->getProduct2();

    if(isset($_SESSION["products_".$id])){

    if($_SESSION["products_".$id]["title"] == $_POST["product_title"]){

        
        Session :: set("info", "you aleardy added this product to your cart");
        Redirect :: to("shoppingCart");
    }
    else {

        if($product['prod_quantity'] < $_POST["product_qte"]){

            Session :: set("info" , " the quantity available is : $product->product_quatity ");
            Redirect :: to("shoppingCart");

        }
        }

    }

    else {
        $_SESSION["products_".$product->prod_id] = array(
    
            "id" => $product->prod_id,
            "title" => $product->prod_title,
            "price" => $product->prod_price,
            "qte" => $_POST["product_qte"],
            "total" => $product->prod_price*$_POST["product_qte"],
    
        );
    
      // ( isset($_SESSION["totaux"]) ? $_SESSION["totaux"] : 0 ) += $_SESSION["products_".$product->prod_id]["total"];
      // ( isset($_SESSION["count"]) ? $_SESSION["count"] : 0) += 1;
             if (isset($_SESSION["totaux"]))
             {

                     $_SESSION["totaux"] += $_SESSION["products_".$product->prod_id]["total"];

               }
               else{
                $_SESSION["totaux"] = $_SESSION["products_".$product->prod_id]["total"];
               }

               if (isset($_SESSION["count"])){

                         $_SESSION["count"] += 1;

                        }
                else{
                    $_SESSION["count"] = 1;
                         }
                 Redirect :: to("shoppingCart");

        }
    }
    




