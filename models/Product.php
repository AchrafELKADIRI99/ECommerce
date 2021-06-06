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
    }
?>