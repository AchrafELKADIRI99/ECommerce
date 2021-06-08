<?php 
    require_once'./autoload.php';
    $home = new HomeController();


    $pages=[
            'home','cart','dashboard','updateProduct','deleteProduct','addProduct',
            'emptyCart','show','cancelCart','register','login','checkout','logout',
            'Products','orders','addorder','Shirts','Shorts','Shoes', 'shoppingCart'];


        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
                $page=$_GET['page'];
                if($page==="dashboard"||$page==="deleteProduct"
                ||$page==="addProduct" ||$page==="updateProduct" ||$page==="orders"){
                    if(isset($_SESSION['admin'])&& $_SESSION['admin']===true){
                        require_once("./views/includes/header.php");

                        $admin = new AdminController();
                        $admin->index($page);
                        require_once("./views/includes/footer.php");
                        
                    }else{
                        include('views/includes/404.php');
                    }
                }else{
                    require_once("./views/includes/header.php");

                    $home->index($page);
                    require_once("./views/includes/footer.php");

                }
            }else{
                include('views/includes/404.php');
            }
        }else{
            require_once("./views/includes/header.php");

            $home->index("home");
            require_once("./views/includes/footer.php");

        }


?>