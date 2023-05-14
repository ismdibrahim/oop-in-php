<?php 
    class A{
        protected static $name;
        static function sayHi()
        {
            echo self::$name = "Hello \n";
            echo "Hi! I'm from A. \n";
        }
    }
    class B extends A{
        static function sayHi()
        {
            parent::sayHi();
            echo parent::$name;
            echo "Hi! I'm from B. \n";
        }
    }
    B::sayHi();
    // echo B::$name;
?>