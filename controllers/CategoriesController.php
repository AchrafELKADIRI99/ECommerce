<?php 
    class CategoriesController {
        public function getAllCategories(){
            $categories = Category::getAllCategories();
            return $categories;
        }}
        
        
        ?>