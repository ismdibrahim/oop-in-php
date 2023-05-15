<?php 

    // function autoload($name){
    //     include "{$name}.php";
    // }

    function autoload($name){
        if(strpos($name, "Planet_") !==false){
            $filename = str_replace("Planet_", "", $name);
            include strtolower("planets/{$filename}.php");
        }else{
            include strtolower("{$name}.php");
        }
    }
    spl_autoload_register('autoload');

    // (new Spaceship)->launch();
    // (new Planet)->getName();
    // (new Bike)->getType();
    (new Planet_Mars)->getName();

?>