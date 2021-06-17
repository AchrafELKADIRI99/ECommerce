<?php
    class Product{
        static public function getAll(){
            $st = DB::connect()-> prepare('SELECT * FROM PRODUCTS');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }
        static public function getShoes(){
            $st = DB::connect()-> prepare('SELECT * FROM PRODUCTS WHERE PROD_CATEGORY_ID=1');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }
        static public function getShirts(){
            $st = DB::connect()-> prepare('SELECT * FROM PRODUCTS WHERE PROD_CATEGORY_ID=2');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }
        static public function getShorts(){
            $st = DB::connect()-> prepare('SELECT * FROM PRODUCTS WHERE PROD_CATEGORY_ID=3');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }
        static public function addProduct($data){
            $stmt = DB::connect()->prepare('INSERT INTO products (prod_title
            ,prod_category_id,prod_price,
            prod_quantity,prod_short_desc,prod_description, prod_image)


            VALUES (:prod_title, :prod_category_id,
            :prod_price,:prod_quantity,:prod_short_desc,:prod_description ,:prod_image)');
            $stmt->bindParam(':prod_title',$data['prod_title']);
            $stmt->bindParam(':prod_category_id',$data['prod_category_id']);
            $stmt->bindParam(':prod_price',$data['prod_price']);
            $stmt->bindParam(':prod_quantity',$data['prod_quantity']);
            $stmt->bindParam(':prod_short_desc',$data['prod_short_desc']);
            $stmt->bindParam(':prod_description',$data['prod_description']);
            $stmt->bindParam(':prod_image',$data['prod_image']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
        }
        


        static public function editProduct($data){
            $stmt = DB::connect()->prepare('UPDATE products SET 
                    prod_title = :prod_title,
                    prod_description=:prod_description,
                    prod_quantity=:prod_quantity,
                    prod_image=:prod_image,
                    prod_price=:prod_price,
                    prod_short_desc=:prod_short_desc,
                    prod_category_id=:prod_category_id
                    WHERE product_id=:product_id
            ');
            $stmt->bindParam(':prod_id',$data['prod_id']);
            $stmt->bindParam(':prod_title',$data['prod_title']);
            $stmt->bindParam(':prod_description',$data['prod_description']);
            $stmt->bindParam(':prod_quantity',$data['prod_quantity']);
            $stmt->bindParam(':prod_image',$data['prod_image']);
            $stmt->bindParam(':prod_price',$data['prod_price']);
            $stmt->bindParam(':prod_short_desc',$data['prod_short_desc']);
            $stmt->bindParam(':prod_category_id',$data['prod_category_id']);
            if($stmt->execute()){
                return 'ok';
            }else{
                return 'error';
            }
            $stmt->close();
            $stmt = null;
        }
        static public function deleteProduct($data){
            $id = $data['id'];
            try{
                $stmt = DB::connect()->prepare('DELETE FROM products WHERE prod_id = :id');
                $stmt->execute(array(":id" => $id));
                $product = $stmt->fetch(PDO::FETCH_OBJ);
                if($stmt->execute()){
                    return 'ok';
                }else{
                    return 'error';
                }
                $stmt->close();
                $stmt =null;
            }catch(PDOException $ex){
                echo "erreur " .$ex->getMessage();
            }
        }
    }
?>