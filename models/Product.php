<?php
    class Product{
        static public function getAll(){
            $st = DB::connect()-> prepare('SELECT * FROM PRODUCTS');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }
    }
?>