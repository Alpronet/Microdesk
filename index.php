<?php

include 'Conn/virg.php' ;

spl_autoload_register(function ($filename){
    
    $filename =$filename."php";
    
    if(file_exists($filename)){
        echo $filename;
        require_once $filename;
    }
    
});