<?php 

class ParentClass{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    public function sayHi()
    {
        echo "Hey! I am from {$this->name}" . "<br/>";
    }
    
}

class ChildClass extends ParentClass{
    public function sayHi()
    {
        parent::sayHi();
        echo "Hello! I am child class.";
    }
}

$cc = new ChildClass('IBrahim');


?>