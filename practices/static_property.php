<?php 
// __Simple property example__
// class PI{
//     public static $value = 3.14159;
// }
// echo PI::$value;

// __Static and non-static property__ 
// class PI{
//     public static $value = 3.14159;
//     public function staticValue(){
//         return self::$value;
//     }
// }
// $obj = new PI();
// echo $obj->staticValue();



// __Static property called a child class__ 
// class A{
//     public static $pi = 3.1459;
// }
// class B extends A{
//     public function staticProperty(){
//         return parent::$pi;
//     }
// }
// $obj = new B();
// echo $obj->staticProperty();



// __Late Static Binding__
// Limitations of self
// class A{
//     public static $courseName = "Advanced PHP";
//     public static function getCourseName(){
//         return self::$courseName;
//     }
// }
// class B extends A{
//     public static $courseName = "Javascript";
// }
// echo B::getCourseName();

// Late Static Bindings usage
class A{
    public static $courseName = "Advanced PHP";
    public static function getCourseName(){
        return static::$courseName;
    }
}
class B extends A{
    public static $courseName = "Javascript";
}
echo B::getCourseName();

?>