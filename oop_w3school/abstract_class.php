<?php 
abstract class Car{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
    abstract public function intro();
}

class Audi extends Car{
    public function intro(){
        echo "Choose German Quality! I am {$this->name}. \n";
    }
}

class Volvo extends Car{
    public function intro(){
        echo "Proud to be Swedish! I am {$this->name}. \n";
    }
}

class Citroen extends Car{
    public function intro(){
        echo "French extravagance! I am {$this->name}. \n";
    }
}

$audi = new Audi('Audi');
echo $audi->intro();

$volvo = new Volvo('Volvo');
echo $volvo->intro();

$citroen = new Citroen('Citroen');
echo $citroen->intro();
?>