<?php 
    class ProductController {
        public function getAllCategories(){
            $catgories = Category::getAll();
            return $catgories;
        }}
        
        
        ?>