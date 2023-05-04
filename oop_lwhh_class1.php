<?php 
    // For class 1: 
    class Human{
        public $name;
        function sayHi(){
            echo "Hello <br/>";
        }
        function sayName(){
            echo "My name is {$this->name} <br/>";
        }
    }
    class Cat{
        function sayHi(){
            echo "Meow <br/>";
        }
    }
    class Dog{
        function sayHi(){
            echo "Woof <br/>";
        }
    }
    $c1 = new Cat();
    $d1 = new Dog();

    // Human class 
    $h1 = new Human();
    $h2 = new Human();
    // $h1->sayHi();

    $h1->name="Ibrahim"; //set 
    $h2->name="Sharmin"; //set 
    // echo $h1->name; // get

    $h1->sayName();
    $h2->sayName();
?>
