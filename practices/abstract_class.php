<?php 
// __Abstract class and abstract method__
// abstract class AbstractClass{
//     abstract protected function getName($name);
// }

// class ChildClass extends AbstractClass{
//     public function getName($name){
//         return "Hi! {$name}";
//     }
// }
// $obj = new ChildClass();
// echo $obj->getName("Ibrahim");

// // __There aren't same parameter__ 
// abstract class AbstractClass{
//     abstract protected function getName($name);
// }
// class ChildClass extends AbstractClass{
//     public function getName($name, $prefix = "Mr. "){
//         return "Hi! " . $prefix . " ". $name;
//     }
// } 
// $obj = new ChildClass();
// echo $obj->getName("Sharmin", "Mst.");


// __another example__ 

// abstract class Car{
//     public $name;
//     public function __construct($name)
//     {
//         $this->name = $name;
//     }
//     abstract public function intro();
// }
// class Audi extends Car{
//     public function intro(){
//         echo "Choose german! I am $this->name \n";
//     }
// }

// class Volbo extends Car{
//     public function intro(){
//         echo "choose Swedish! I am $this->name \n";
//     }
// }
// $audi = new Audi("Audi");
// echo $audi->intro();

// $volbo = new Volbo("Volbo");
// echo $volbo->intro();

// __abstract method has argument__ 
abstract class ParentClass{
    abstract protected function prefixName($name);
}
class ChildClass extends ParentClass{
    public function prefixName($name){
        if("John Doe" == $name){
            $prefix = "Mr. ";
        }elseif("Jane Doe" == $name){
            $prefix = "Mrs. ";
        }else{
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

$obj = new ChildClass();
echo $obj->prefixName('Jane Doe');

?>