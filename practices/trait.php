<?php 
/**
 * Trait
 */
// trait testTrait{
//     public function sayHello()
//     {
//         return "Hello \n";
//     }
//     public function sayWorld()
//     {
//         return "World \n";
//     }
// }
// class Test{
//  use testTrait;
// }
// $obj = new Test();
// echo $obj->sayHello();
// echo $obj->sayWorld();

/**
 * Trait with precedence: child -> trait -> parent
 */
// class ParentClass{
//     public function sayHello()
//     {
//         return "I'm from parent class. \n";
//     }
// }
// trait TestTrait{
//     public function sayHello()
//     {
//         return "I'm from trait class. \n";
//     }
// }
// class ChildClass extends ParentClass{
//     use TestTrait;
//     public function sayHello()
//     {
//         return "I'm from child class. \n";
//     }
// }

// $obj = new ChildClass();
// echo $obj->sayHello();

/**
 * Multiple traits
 */
// trait Subscriber{
//     public function subscriberlogin()
//     {
//         echo "You're logged in as a Subscriber. \n";
//     }
// }
// trait Contributor{
//     public function contributorlogin()
//     {
//         echo "You're logged in as a Contributor. \n";
//     }
// }
// trait Author{
//     public function authorlogin()
//     {
//         echo "You're logged in as a Author. \n";
//     }
// }
// trait Administrator{
//     public function administratorlogin()
//     {
//         echo "You're logged in as a Administrator. \n";
//     }
// }

// class Member{
//     use Subscriber, Contributor, Author, Administrator;
//     public function run()
//     {
//         $this->subscriberlogin();
//         $this->contributorlogin();
//         $this->authorlogin();
//         $this->administratorlogin();
//     }
// }

// $obj = new Member();
// echo $obj->run();

/**
 * Multiple trait example 2
 */
// trait Hello{
//     public function sayHello()
//     {
//         echo "Hello ";
//     }
// }
// trait World{
//     public function sayWorld()
//     {
//         echo "World";
//     }
// }
// trait HelloWorld{
//     use Hello, World;
// }

// class Test {
//     use HelloWorld;
// }

// $world = new Test();
// echo $world->sayHello() . " " . $world->sayWorld()


/**
 * Trait conflict resolution
 */

// trait testTrait1{
//     public function sayHello()
//     {
//         echo "I'm from Test Trait 1. \n";
//     }
// }
// trait testTrait2{
//     public function sayHello()
//     {
//         echo "I'm from Test Trait 2. \n";
//     }
// }
// class Test{
//     use testTrait1, testTrait2{
//         testTrait1:: sayHello insteadOf testTrait2;
//         testTrait2:: sayHello as sayHello2;
//     }
// }
// $obj = new Test();
// $obj->sayHello();
// $obj->sayHello2();

/**
 * Trait Properties
 */
// trait Fruits{
//     public $banana = 101;
//     public $mango = 202;
//     public $apple = 301;
// }
// class Test{
//     use Fruits;
// }
// $obj = new Test();
// echo $obj->mango;

/**
 * Trait static property and method
 */
// trait Fruits{
//     public $banana = 101;
//     public $mango = 202;
//     static public $apple = 301;
//     public static function getMessage(){
//         return self::$apple;
//     }
// }
// class Test{
//     use Fruits;
// }
// echo Test::$apple;
// echo "\n";
// echo Test::getMessage();

/**
 * Trait abstract method
 */
// trait testTrait{
//     abstract function getMessage();
// }
// class Test{
//     use testTrait;
//     public function getMessage()
//     {
//         echo "Hello! I am abstract method. \n"; 
//     }
// }
// $obj = new Test();
// $obj->getMessage();
?>

