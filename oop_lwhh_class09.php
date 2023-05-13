<?php 
    abstract class OurClass{
       final function doSomething(){
            echo "Do something";
        }
    }

    class Myclass extends OurClass{
        
    }

    $my = new Myclass();
    $my->doSomething();
?>