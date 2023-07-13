<?php 
class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function getData(){
        echo "The fruit name is ".$this->name. " and the color is ". $this->color. ".";
    }
}
class Banana extends Fruit{
    public function message(){
        echo "My name is Banana. \n";
    }
}
$obj = new Banana("Mango", "orange");
$obj->message();
$obj->getData();
?>