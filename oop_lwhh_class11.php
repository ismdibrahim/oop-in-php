<?php 

    interface BaseAnimal{
        public function isAlive();
        function eat();
        function breed();
    }
    class Animal implements BaseAnimal{
        public function isAlive(){}
        function eat(){}
        function breed(){}
    }
    interface BaseHuman extends BaseAnimal{
        public function talk();
    }

    abstract class AbstractHuman implements BaseHuman{
        abstract function run();
        function eat(){
            echo "I am eating";
        }
    }

    Class Human extends AbstractHuman{
        public function isAlive(){}
        function eat(){}
        function breed(){}
        function talk(){}
        function run(){}
    }

    $cat = new Animal();
    echo $cat instanceof BaseAnimal;
    
     
?>