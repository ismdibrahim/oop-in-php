<?php 
    abstract class OurClass{
        public function sayHi()
        {
            echo "Hello!";
        }

        abstract function eat();
    }

    class MyClass extends OurClass{
        public function eat()
        {
            echo "I am eating";
        }
    }

    $af = new MyClass();
    $af->eat('rice');
?>