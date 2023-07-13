<?php 

// Constructor method

class ConstructorMethod{
    public function __construct()
    {
        echo "Welcome to construction function. <br/>";
    }
    public function sayHello(){
        echo "Hello";
    }
}
$obj = new ConstructorMethod();
$obj->sayHello();

// Constructor method with parameter

class ConstructorMethodParameter{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$obj = new ConstructorMethodParameter("Ibrahim");
echo $obj->get_name();

// Destructor Method

class DestructorMethod{
    public function __construct(){
        echo "Hello! I'm constructor method. <br/>";
    }
    public function sayHello(){
        echo "Hello! I'm normal method. <br/>";
    }
    public function __destruct(){
        echo "Hello! I'm destructor method. <br/>";
    }
}
$obj = new DestructorMethod();
$obj->sayHello();

// Destructor method with parameter
class DestructorMethodParameter{
    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "The fruit is ".$this->name. " and color is ". $this->color;
    }
}
$obj = new DestructorMethodParameter("Mango", "orange");

?>