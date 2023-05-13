<?php 
    class Animal{
        protected $name;

        public function __construct($name)
        {
            $this->name = $name;
        }
        public function eat()
        {
            echo "{$this->name} is eating.";
        }
        public function run()
        {
            echo "{$this->name} is running.";
        }
        public function sleep()
        {
            echo "{$this->name} is sleeping.";
        }
        public function commonFunction(){}
        protected function addTitle($title){
            $this->name = $title . " " . $this->name;
        }
    }

    class Human extends Animal{
        public function commonFunction()
        {
            $this->addTitle("Mr. ");
            echo "{$this->name} says Hi!";
        }
    }

    class Cat extends Animal{
        public function commonFunction()
        {
            echo "{$this->name} says Meow.";
        }
    }

    $h1 = new Human("Ibrahim");
    echo $h1->commonFunction();
    $h1->eat();

    $cat1 = new Cat('Tom');
    $cat1->commonFunction();
    $cat1->eat();
?>