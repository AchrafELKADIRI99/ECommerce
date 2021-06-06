<?php
    class adminController{
        public function index($page){
            include('views/admin/'.$page.'.php');
        }   
    }
?>