<?php 

class Fruit{
    public $name;
    public $color;

    public function set_name($name){
        $this->name = $name;
    }

    public function get_name(){
        return $this->name;
    }
}

$f = new Fruit();
$banana -> set_name('Banana');
echo $banana = get_name();

?>