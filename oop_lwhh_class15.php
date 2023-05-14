<?php 
     define("OKAY", 123);


    class MyClass{
        const CITY = "Jashore";
        function sayHi(){
            echo "My city name is ".self::CITY ."\n"; 
        }
    }

    $my = new MyClass();
    $my->sayHi();
    // echo $my::CITY;
    // echo MyClass::CITY;

?>