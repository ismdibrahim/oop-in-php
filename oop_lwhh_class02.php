<?php 

class Human{
    public $name;
    public $age;
    function __construct($personName, $personAge = 0){
        $this->name = $personName;
        $this->age = $personAge;
    }
    function sayHi(){
        if($this->age){
            echo "My name is {$this->name}. I am {$this->age} years old.";
        }else{
            echo "My name is {$this->name}. I don't know how old I am.";
        }
    }
}

$h1 = new Human('Ibrahim', 12);
$h2 = new Human('Sizar',30);
$h3 = new Human('sharmin');
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();

?>