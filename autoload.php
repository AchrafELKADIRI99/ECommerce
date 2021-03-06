<?php
    session_start();
    require_once("./bootstrap.php");
    spl_autoload_register('autoload');

    function autoload($classe_name){
        $array_path=array(
            'database/',
            'classes/',
            'models/',
            'controllers/'
        );
        $parts = explode ('\\',$classe_name);
        $name = array_pop($parts);

        foreach($array_path as $path){
            $file=sprintf($path.'%s.php',$name);
            if(is_file($file)){
                include_once $file;
            }
        }
    }
?>