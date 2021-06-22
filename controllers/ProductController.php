<?php 
    class ProductController {
        public function getAllProducts(){
            $products = Product::getAll();
            return $products;
        }
        public function getShoes(){
            $products = Product::getShoes();
            return $products;
        }
        public function getShirts(){
            $products = Product::getShirts();
            return $products;
        }
        public function getShorts(){
            $products = Product::getShorts();
            return $products;
        }

        public function getLatest(){
            $products = Product::latestProducts();
            return $products;
        }
        
         
        public function getProductsByCategory($id){
            if(isset($id)){
                $data = array(
                    'id' => $id
                );
                $products = Product::getProductByCat($data);
                return $products;
            }
        }
         public function getProduct(){
            if(isset($_POST["prodId"])){
                $data = array(
                    'id' => $_POST["prodId"]
                    
                );
                $product = Product::getProductById($data);
                return $product;
            }
        }
        
        public function getProduct2(){
            if(isset($_POST["product_id"])){
                $data = array(
                    'id' => $_POST["product_id"]
                );
                $product = Product::getProductById($data);
                return $product;
            }
        }




        public function emptyCart($id,$price){
            unset($_SESSION["products_".$id]);
            $_SESSION["count"] -= 1;
            $_SESSION["totaux"] -= $price;
            Redirect::to("shoppingCart");
        }
        static public function getProductById($data){
            $id = $data['id'];
            try{
                $stmt = DB::connect()->prepare('SELECT * FROM products WHERE prod_id = :id');
                $stmt->execute(array(":id" => $id));
                $product = $stmt->fetch(PDO::FETCH_OBJ);
                return $product;
                $stmt->close();
                $stmt =null;
            }catch(PDOException $ex){
                echo "erreur " .$ex->getMessage();
            }
        }
        public function newProduct(){
            if(isset($_POST["submit"])){
                $data = array(
                    "prod_title" => $_POST["prod_title"],
                    "prod_description" => $_POST["prod_description"],
                    "prod_quantity" => $_POST["prod_quantity"],
                    "prod_short_desc" => $_POST["prod_short_desc"],
                    "prod_image" => $this->uploadPhoto(),
                    "prod_price" => $_POST["prod_price"],
                    "prod_category_id" => $_POST["prod_category_id"],
                );
                $result = Product::addProduct($data);
                if($result === "ok"){
                    Session::set("success","Product added");
                    Redirect::to("productsadmin");
                }else{
                    echo $result;
                }
            }
        }
        public function updateProduct(){
            if(isset($_POST["submit"])){
                $oldImage = $_POST["prod_current_image"];
                $data = array(
                    "prod_id" => $_POST["prod_id"],
                    "prod_title" => $_POST["prod_title"],
                    "prod_description" => $_POST["prod_description"],
                    "prod_quantity" => $_POST["prod_quantity"],
                    "prod_short_desc" => $_POST["prod_short_desc"],
                    "prod_image" => $this->uploadPhoto($oldImage),
                  
                    "prod_price" => $_POST["prod_price"],
                    "prod_category_id" => $_POST["prod_category_id"],
                );
                $result = Product::editProduct($data);
                if($result === "ok"){
                    Session::set("success","PRODUCT MODIFIED");
                    Redirect::to("productsadmin");
                }else{
                    echo $result;
                }
            }
        }
        public function uploadPhoto($oldImage = null){
            $dir = "./Images";
            $time = time();
            $name = str_replace(' ','-',strtolower($_FILES["prod_image"]["name"]));
            $type = $_FILES["prod_image"]["type"];
            $ext = substr($name,strpos($name,'.'));
            $ext = str_replace('.','',$ext);
            $name = preg_replace("/\.[^.\s]{3,4}$/", "",$name);
            $imageName = $name.'-'.$time.'.'.$ext;
            if(move_uploaded_file($_FILES["prod_image"]["tmp_name"],$dir."/".$imageName)){
                return $imageName; 
            }
            return $oldImage;
        }
        public function removeProduct(){
            if(isset($_POST["delete_product_id"])){
                $data = array(
                    "id" => $_POST["delete_product_id"]
                );
                $result = Product::deleteProduct($data);
                if($result === "ok"){
                    Session::set("success","Product deleted");
                    Redirect::to("productsadmin");
                }else{
                    echo $result;
                }
            }
        }
    }

?>