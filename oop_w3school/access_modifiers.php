<?php 
class Fruit{
    public $name;
    public $color;
    public $weight;

    function setName($name){
        $this->name = $name;
    }

    protected function setColor($color){
        $this->color = $color;
    }

    private function setWeight($weight){
        $this->weight = $weight;
    }

    function getName(){
        return $this->name;
    }
}

$mango = new Fruit();
$mango->setName('Mango');
echo $mango->getName();

?>