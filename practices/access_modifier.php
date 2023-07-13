<?php 
// public access modifier

class GrandFather{
    public $name = "Ibrahim Hossen";
    public function getName(){
        return $this->name . "<br/>";
    }
}
class Daddy extends GrandFather{
    public function displayGrandFaName(){
        return $this->name;
    }
}

$grandFa = new GrandFather();
echo $grandFa->getName();

$daddy = new Daddy();
echo $daddy->displayGrandFaName();

// protected access modifier
// class GrandFather{
//     protected $name = "Ibrahim Hossen";
//     public function getName(){
//         return $this->name . "<br/>";
//     }
// }
// class Daddy extends GrandFather{
//     public function displayGrandFaName(){
//         return $this->name;
//     }
// }

// $grandFa = new GrandFather();
// echo $grandFa->getName();

// $daddy = new Daddy();
// echo $daddy->displayGrandFaName();

// Private access modifier
// class GrandFather{
//     private $name = "Ibrahim Hossen";
//     public function getName(){
//         return $this->name . "<br/>";
//     }
// }
// class Daddy extends GrandFather{
//     public function displayGrandFaName(){
//         return $this->name;
//     }
// }

// $grandFa = new GrandFather();
// echo $grandFa->getName();

// $daddy = new Daddy();
// echo $daddy->displayGrandFaName(); // Error
?>