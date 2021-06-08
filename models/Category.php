<?php
    class Category{
        static public function getAllCategories(){
            $st = DB::connect()-> prepare('SELECT * FROM CATEGORIES');
            $st->execute();
            return $st -> fetchAll();
            $st -> close;
            $st=null;
        }}
        ?>