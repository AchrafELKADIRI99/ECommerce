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
        public function getAllSorts(){
            $products = Product::getShorts();
            return $products;
        }
    }

?>