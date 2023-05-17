<?php 
class Fruit{
    public $name;
    public $color;

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name . "\n";
    }
    function setColor($color){
        $this->color = $color;
    }
    function getColor(){
        return $this->color . "\n";
    }
}

$apple = new Fruit();
$apple->setName('Apple');
$apple->setColor('Red');
echo $apple->getName();
echo $apple->getColor();

$banana = new Fruit();
$banana->setName('Banana');
$banana->setColor('Yellow');
echo $banana->getName();
echo $banana->getColor();

$apple->name = "Apple 2 \n";
echo $apple->name;

var_dump($apple instanceof Fruit);
?>