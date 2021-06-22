<?php
if(isset($_SESSION["admin"]) && $_SESSION["admin"] == true){
    $data = new UsersController();
    $data->removeUser();
}else{
    Redirect::to("home");
}