<?php 
    require_once'./autoload.php';
    $home = new HomeController();


    $pages=[
            'home','cart','dashboard','updateProduct','deleteProduct','addProduct',

            'emptyCart','show','cancelCart','register','sign','checkout','logout',
            'Products','orders','addorder','Shirts','Shorts','Shoes', 'shoppingCart','singleProduct',
            'dashboard','productsadmin' ,'users','deleteOrder','deleteUser'];

            



        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$pages)){
                $page=$_GET['page'];
                if($page==="dashboard"||$page==="deleteProduct" ||$page==="deleteOrder"
                ||$page==="addProduct" ||$page==="updateProduct" ||$page==="orders" ||$page==="productsadmin" || $page==="users" || $page==="deleteUser"){
                    if(isset($_SESSION['admin'])&& $_SESSION['admin']==true){
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