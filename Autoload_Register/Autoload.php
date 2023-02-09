<?php


spl_autoload_register(function($name){
    
    if((file_exists("Autoload_Register/Classes/".$name.".php")))
    {
        echo "One: I am calling class: $name \n";
        include "Autoload_Register/Classes/".$name.".php";
    }
});

function autoLoad($name){
    if(file_exists("Autoload_Register/Classes/".$name.".php"))
        {
            echo "Two: I am calling class: $name \n";
            include "Autoload_Register/Classes/".$name.".php";
        }
}

spl_autoload_register('autoLoad');

try{
    $obj1 = new One;
    $obj2 = new Two;
    $obj3 = new Three;
}catch(Exception $e){
    echo $e->getMessage();
}
