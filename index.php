<?php 
    require_once'./autoload.php';

    $home = new HomeController();


    $pages=[
            'home','cart','dashboard','updateProduct','deleteProduct','addProduct',
            'emptyCart','show','cancelCart','register','login','checkout','logout',
            'products','orders','addorder'];


        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
                $page=$_GET['page'];
                if($page==="dashboard"||$page==="deleteProduct"
                ||$page==="addProduct" ||$page==="updateProduct" ||$page==="orders"){
                    if(isset($_SESSION['admin'])&& $_SESSION['admin']===true){
                        $admin = new adminController();
                        $admin->index($page);
                    }else{
                        include('views/includes/404.php');
                    }
                }else{
                    $home->index($page);
                }
            }else{
                include('views/includes/404.php');
            }
        }else{
            $home->index("home");
        }


?>