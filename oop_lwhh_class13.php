<?php 
    class A{
        static function sayHi(){
            echo "Hi! I am from A \n";
        }
    }

    class B extends A{
        static function sayHi(){
            echo "Hi! I am from B \n";
            parent::sayHi();
        }
    }

    B::sayHi();
?>