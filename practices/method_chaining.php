<?php 
// General Method

class GeneralMethod{
    public $name;
    public $age;

    public function setName($name=""){
        $this->name = $name;
    }
    public function setAge($age="23"){
        $this->age = $age;
    }
    public function getInfo(){
        echo "Hello! My name is ". $this->name . " and my age is " . $this->age . " Years."; 
    }
}
$GM = new GeneralMethod();
$GM->setName("Ibrahim");
$GM->setAge("28");
$GM->getInfo();


// Method Chaining

class MethodChaining{
    public $name;
    public $age;
    public function setName($name="Ibrahim"){
        $this->name = $name;
        return $this;
    }
    public function setAge($age = "22"){
        $this->age = $age;
        return $this;
    }
    public function getInfo(){
        echo "My name is ". $this->name . " and my age is ". $this->age . " years.";
    }
}

$mc = new MethodChaining();
$mc->setName("abdulillah")->setAge("33")->getInfo();


// Static method chaining

class StaticMethodChaining{
    public static $name;
    public static $age;
    public static function setName($name="Ibrahim"){
        static::$name = $name;
        return new static;
    }
    public static function setAge($age = "22"){
        static::$age = $age;
        return new static;
    }
    public static function getInfo(){
        return "My name is ". self::$name . " and my age is ". self::$age . " years.";
    }
}
echo StaticMethodChaining::setName("Abdulillah")->setAge('33')->getInfo();

// static method chaining example 2

// class StaticMethodChaining1{
//     public static $val;
//     public static function init($var){
//         static::$val = $var;
//         return new static;
//     } 
//     public static function add($var){
//         static::$val += $var;
//         return new static;
//     }
//     public static function sub($var){
//         static::$val -= $var;
//         return new static;
//     }
//     public static function out(){
//         return static::$val;
//     }
// }
// echo StaticMethodChaining1::init(10)->add(2)->sub(3)->out();

?>

