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
        echo "The fruit is {$this->name} and color is {$this->color}.";
    }
}

class Banana extends Fruit{
    public $weight;
    public function __construct($name,$color,$weight)
    {
        $this->name = $name;
        $this->color = $color;
        $this->weight = $weight;
    }
    public function getData()
    {
        echo "The fruit is {$this->name} and color is {$this->color} and weight is {$this->weight}.";
    }
}
$obj = new Banana('Banana', 'orange', '75gm');
$obj->getData();


?>
