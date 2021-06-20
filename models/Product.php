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
        static public function getProductById($data){
            
            $id = $data['id'];
            try{
                $st = DB::connect()->prepare('SELECT * FROM products WHERE prod_id = :id');
                $st->execute(array(":id" => $id));
                $product = $st->fetch(PDO::FETCH_OBJ);
                return $product;
                $st->close();
                $st =null;
            }catch(PDOException $ex){
                echo "erreur " .$ex->getMessage();
            }
        }
        static public function getShorts(){
            $st = DB::connect()-> prepare('SELECT * FROM PRODUCTS WHERE PROD_CATEGORY_ID=3');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }

        static public function getById($id){
            $st = DB::connect()-> prepare('SELECT * FROM PRODUCTS WHERE PROD_ID='.$id);
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }
        
    }
?>