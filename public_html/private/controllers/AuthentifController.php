<?php 

    if(isset($_POST['user']) && isset($_POST['password'])){
        if(($_POST['user']=='admin') && ($_POST['password']== 'admin')){
            session_start();
            if (isset($_SESSION['logedin']) ){
                header('Location: contenu.php');
            }else{
                $_SESSION['logedin'] = true;
                header('Location: contenu.php');
            }
        }else{
            header('Location: authentif.php');
        }
    }else{
        header('Location: authentif.php');
    }

?>