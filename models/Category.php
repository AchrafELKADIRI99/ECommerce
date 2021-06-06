<?php
    class Product{
        static public function getAll(){
            $st = DB::connect()-> prepare('SELECT * FROM CATEGORIES');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }}
        ?>