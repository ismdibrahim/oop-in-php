<?php 
class Fruit{
    public $name, $color;
    function __construct($name, $color){
        $this->name = $name;
        $this->color = $color;
    }
    function intro(){
        echo "The fruit is {$this->name} and the color is {$this->color} \n";
    }
}

class Strawberry extends Fruit{
    public $weight;
    function __construct($name, $color, $weight){
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    function intro(){
        echo "The fruit is {$this->name}, the color is {$this->color} and the weight is {$this->weight}.";
    }
}

$straw = new Strawberry('Strawberry', "Red", "3kg");
$straw->intro();
?>