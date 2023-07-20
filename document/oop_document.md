# OOP
object-oriented programming is about creating objects that contain both data and functions.

## Class
```php
class Fruit // class declaration
{ // Class start

    /*........
    class body
    ..........*/

} // Class end
```

## Object
```php
class Fruit{
    // property declaration
    public $name;
    public $color;

    // method declaration
    public function set_name($name){
        $this->name = $name;
    }
    public function get_name(){
        return $this->name;
    }
}

$f = new Fruit(); // Object Call
$f -> set_name('Banana');
echo $f -> get_name();
```

## Method Chaining
The concatenation of multiple methods to increase the readability of code and avoid putting all the code in the single function.

```php
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
```
```php
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
```
```php
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
```

## Constructor method
If you create a __construct() function, PHP will automatically call this function when you create an object from a class.

```php
// Constructor method
class ConstructorMethod{
    public function __construct()
    {
        echo "Welcome to construction function. <br/>";
    }
    public function sayHello(){
        echo "Hello";
    }
}
$obj = new ConstructorMethod();
$obj->sayHello();
```

```php
// Constructor method with parameter
class ConstructorMethodParameter{
    public $name;

    function __construct($name)
    {
        $this->name = $name;
    }
    function get_name(){
        return $this->name;
    }
}

$obj = new ConstructorMethodParameter("Ibrahim");
echo $obj->get_name();
```

## Destructor Method
If you create a __destruct() function, PHP will automatically call this function at the end of the script.

```php
class DestructorMethod{
    public function __construct(){
        echo "Hello! I'm constructor method. <br/>";
    }
    public function sayHello(){
        echo "Hello! I'm normal method. <br/>";
    }
    public function __destruct(){
        echo "Hello! I'm destructor method. <br/>";
    }
}
$obj = new DestructorMethod();
$obj->sayHello();
```

```php
// Destructor method with parameter
class DestructorMethodParameter{
    public $name;
    public $color;

    public function __construct($name,$color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    function __destruct()
    {
        echo "The fruit is ".$this->name. " and color is ". $this->color;
    }
}
$obj = new DestructorMethodParameter("Mango", "orange");
```

## Access Modifiers
There are three access modifiers:
* public - the property or method can be accessed from everywhere. This is default
* protected - the property or method can be accessed within the class and by classes derived from that class
* private - the property or method can ONLY be accessed within the class

### public
```php
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
```

### protected
```php
class GrandFather{
    protected $name = "Ibrahim Hossen";
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
```

### Private
```php
class GrandFather{
    private $name = "Ibrahim Hossen";
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
echo $daddy->displayGrandFaName(); // Error
```

## Inheritance 
The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
```php
class Fruit{
    public $name;
    public $color;
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
    public function getData(){
        echo "The fruit name is ".$this->name. " and the color is ". $this->color. ".";
    }
}
class Banana extends Fruit{
    public function message(){
        echo "My name is Banana. \n";
    }
}
$obj = new Banana("Mango", "orange");
$obj->message();
$obj->getData();
```

## Overriding method
Inherited methods can be overridden by redefining the methods (use the same name) in the child class.

```php
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
```

## Prevent class/method overriding(Final keyword)
The final keyword can be used to prevent class inheritance or to prevent method overriding.

### Prevent class
```php
// Prevent class 
final class Fruit{
    // Some code
}
class Banana extends Fruit{
    // Some code 
}
// Result will be Fatal error.
```

### Prevent method
```php
class Fruit{
    final public function getData(){
        // some code
    }
}
class Banana extends Fruit{
    public function getData(){
         // some code
    }
}
// Result will be Fatal error
```

## Static Methods
Static methods can be called directly - without creating an instance of the class first.
```php
// __Simple static method__
class greeting{
    public static function welcome(){
        echo "Welcome to our office.";
    }
}
greeting::welcome(); // Welcome to our office.
```

```php
// __Static and non-static method__
class greetng{
    public static function welcome(){
        echo "Welcome to our office.";
    }
    public function __construct()
    {
        self::welcome();
    }
}
new greetng(); // Welcome to our office.
```

```php
// __Static method called from other classes__
class A{
    public static function welcome(){
        echo "Welcome to our office.";
    }
}
class B{
    public function message(){
        A::welcome();
    }
}
$obj = new B();
echo $obj->message(); // Welcome to our office.
```

```php
// __Static method called from a child class__ 
class Greeting{
    public static function welcome(){
        echo "Welcome to our office.";
    }
}

class Message extends Greeting{
    public $msg;
    public function __construct(){
        $this->msg = parent::welcome();
    }
}

$obj = new Message();
```

## Static Property 

```php
// __Simple property example__
class PI{
    public static $value = 3.14159;
}
echo PI::$value; // 3.1459
```

```php
// __Static and non-static property__ 
class PI{
    public static $value = 3.14159;
    public function staticValue(){
        return self::$value;
    }
}
$obj = new PI();
echo $obj->staticValue(); // 3.1459
```

```php
// __Static property called a child class__ 
class A{
    public static $pi = 3.1459;
}
class B extends A{
    public function staticProperty(){
        return parent::$pi;
    }
}
$obj = new B();
echo $obj->staticProperty(); // 3.1459
```

## Late Static Binding
Basically, it boils down to the fact that the self keyword does not follow the same rules of inheritance. self always resolves to the class in which it is used. This means that if you make a method in a parent class and call it from a child class, self will not reference the child as you might expect.

Late static binding introduces a new use for the static keyword, which addresses this particular shortcoming. When you use static, it represents the class where you first use it, ie. it 'binds' to the runtime class.

```php
// Limitations of self
class A{
    public static $courseName = "Advanced PHP";
    public static function getCourseName(){
        return self::$courseName;
    }
}
class B extends A{
    public static $courseName = "Javascript";
}
echo B::getCourseName(); // Advanced PHP
```

```php
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
echo B::getCourseName(); // Javascript
```

## Abstract Classes
An abstract class is a class that contains at least one abstract method. An abstract method is a method that is declared, but not implemented in the code. if the abstract method is defined as protected, the child class method must be defined as either protected or public, but not private. Also, the type and number of required arguments must be the same. However, the child classes may have optional arguments in addition.

```php
// __Abstract class and abstract method__
abstract class AbstractClass{
    abstract protected function getName($name);
}
class ChildClass extends AbstractClass{
    public function getName($name){
        return "Hi! {$name}";
    }
}
$obj = new ChildClass();
echo $obj->getName("Ibrahim");
```

```php
// __There aren't same parameter__ 
abstract class AbstractClass{
    abstract protected function getName($name);
}
class ChildClass extends AbstractClass{
    public function getName($name, $prefix = "Mr. "){
        return "Hi! " . $prefix . " ". $name;
    }
} 
$obj = new ChildClass();
echo $obj->getName("Sharmin", "Mst.");
```

## Interface
Interface are similar to abstract classes. The difference between interfaces and abstract classes are:

* Interfaces cannot have properties, while abstract classes can
* All interface methods must be public, while abstract class methods is public or protected
* All methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary
* Classes can implement an interface while inheriting from another class at the same time

```php
// Interface definition
interface MyInterface {
  public function aMethod();
  public function anotherMethod();
}
```
```php
// How to implement interface
class MyClass implements MyInterface1,...,MyInterfaceN {
  public function aMethod() {
    // (code to implement the method)
  }
  public function anotherMethod() {
    // (code to implement the method)
  }
}
```

```php
// __Simple Interface__ 
interface Animal{
    public function makeSound();
}
class Cat implements Animal{
    public function makeSound()
    {
        echo "Meow";
    }
}
$cat = new Cat();
$cat->makeSound(); // Meow
```

```php
// __another example__ 
interface Animal{
    public function makeSound();
}
class Cat implements Animal{
    public function makeSound()
    {
        echo "Meow ";
    }
}
class Dog implements Animal{
    public function makeSound()
    {
        echo "Bark ";
    }
}
class Mouse implements Animal{
    public function makeSound()
    {
        echo "Squeak ";
    }
}

$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();

$animals = array($cat,$dog,$mouse);
foreach($animals as $animal){
    $animal->makeSound();
} // Meow Bark Squeak 
```

## Method/Property Overloading
Overloading in PHP provides means to dynamically create properties and methods. The overloading methods are invoked when interacting with properties or methods that have not been declared or are not visible in the current scope. The rest of this section will use the terms inaccessible properties and inaccessible methods to refer to this combination of declaration and visibility.

### Property overloading
* __set() is run when writing data to inaccessible (protected or private) or non-existing properties.
* __get() is utilized for reading data from inaccessible (protected or private) or non-existing properties.
* __isset() is triggered by calling isset() or empty() on inaccessible (protected or private) or non-existing properties.
* __unset() is invoked when unset() is used on inaccessible (protected or private) or non-existing properties.

```php
// Property Overloading
class PropertyOverload{
    private $data = array();
    public function __set($name, $value){
        echo "Setting {$name} property to {$value} \n";
        $this->data[$name] = $value;
    }
    public function __get($name){
        echo "Getting {$name} Property with value : ";
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }
    }
}
$obj = new PropertyOverload();
$obj->a = "Ibrahim";
echo $obj->a;
// Setting a property to Ibrahim 
// Getting a Property with value : Ibrahim
```
```php
// Propery overloading with set, get, isset and unset
class PropertyOverload{
    private $data = array();
    public function __set($name, $value){
        echo "Setting {$name} Property to {$value} \n";
        $this->data[$name] = $value;
    }
    public function __get($name){
        echo "Getting {$name} Property to value: ";
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }
    }
    public function __isset($name)
    {
        echo "Is {$name} Property set? \n";
        echo isset($this->data[$name])? "Yes {$name} property is set":"No property is not set \n";
        echo "\n";
    }
    public function __unset($name)
    {
        echo "Unsetting {$name} \n";
        unset($this->data[$name]);
    }
}
$obj = new PropertyOverload();
$obj->a = "Ibrahim";
echo $obj->a;
echo isset($obj->a);
unset($obj->a);
echo isset($obj->a);

// Setting a Property to Ibrahim 
// Getting a Property to value: Ibrahim
// Is a Property set? 
// Yes a property is set
// Unsetting a 
// Is a Property set? 
// No property is not set 
```

## Method Overloading
* __call() is triggered when invoking inaccessible methods in an object context.
* __callStatic() is triggered when invoking inaccessible methods in a static context.

```php
class MethodOverload{
    public function __call($name, $arguments){
        echo "Calling object method {$name}" . implode(", ", $arguments) . "\n";
    }
    public static function __callStatic($name, $arguments)
    {
        echo "Calling static method {$name}" . implode(", ", $arguments) . "\n";
    }
}
$obj = new MethodOverload();
$obj->runTest(" In object contect");
MethodOverload::runTest(" In static context");
// Calling object method runTest In object contect
// Calling static method runTest In static context
```

## Object Serialization 
serialize() returns a string containing a byte-stream representation of any value that can be stored in PHP.

```php
class Member{
    public $username = "";
    private $loggedIn = false;

    public function login(){
        $this->loggedIn = true;
    }
    public function logout(){
        $this->loggedIn = false;
    }
    public function isLoggedIn(){
        return $this->loggedIn;
    }
}

$member = new Member();
$member->username = "Ibrahim";
$member->login();

$memberString = serialize($member);
echo "Converted the member to a string: $memberString \n";
```

## Object unserialization 
The unserialize() function converts a serialized string into an object. 

```php
class Member{
    public $username = "";
    private $loggedIn = false;

    public function login(){
        $this->loggedIn = true;
    }
    public function logout(){
        $this->loggedIn = false;
    }
    public function isLoggedIn(){
        return $this->loggedIn;
    }
}

$member = new Member();
$member->username = "Ibrahim";
$member->login();

$memberString = serialize($member);
$member2 = unserialize($memberString);
echo $member2->username. " is " . ($member2->isLoggedIn() ? "Logged In" : "Logged out");
```

### The __sleep() magic method
It’ll execute the __sleep() method before serializing the object. The __sleep() method returns an array that contains property names that will be serialized.

```php
 class Member{
    public $name="Ibrahim";
    public $email="ibrahim@mail.com";
    public $mobile="01989309451";
    public  $address="Jashore,Bangladesh";
    public function __sleep(){
      return ["name","email"];
    }
  }
  $member = new Member();
  $memberString = serialize( $member );
  echo $memberString;
  ```

## Traits
PHP only supports single inheritance: a child class can inherit only from one single parent. So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.

```php
/**
 * Trait
 */
trait testTrait{
    public function sayHello()
    {
        return "Hello \n";
    }
    public function sayWorld()
    {
        return "World \n";
    }
}
class Test{
 use testTrait;
}
$obj = new Test();
echo $obj->sayHello();
echo $obj->sayWorld();
```

```php
/**
 * Trait with precedence: child -> trait -> parent
 */
class ParentClass{
    public function sayHello()
    {
        return "I'm from parent class. \n";
    }
}
trait TestTrait{
    public function sayHello()
    {
        return "I'm from trait class. \n";
    }
}
class ChildClass extends ParentClass{
    use TestTrait;
    public function sayHello()
    {
        return "I'm from child class. \n";
    }
}

$obj = new ChildClass();
echo $obj->sayHello();
```
```php
/**
 * Multiple traits example 1
 */
trait Subscriber{
    public function subscriberlogin()
    {
        echo "You're logged in as a Subscriber. \n";
    }
}
trait Contributor{
    public function contributorlogin()
    {
        echo "You're logged in as a Contributor. \n";
    }
}
trait Author{
    public function authorlogin()
    {
        echo "You're logged in as a Author. \n";
    }
}
trait Administrator{
    public function administratorlogin()
    {
        echo "You're logged in as a Administrator. \n";
    }
}

class Member{
    use Subscriber, Contributor, Author, Administrator;
    public function run()
    {
        $this->subscriberlogin();
        $this->contributorlogin();
        $this->authorlogin();
        $this->administratorlogin();
    }
}

$obj = new Member();
echo $obj->run();
```
```php
/**
 * Multiple trait example 2
 */
trait Hello{
    public function sayHello()
    {
        echo "Hello ";
    }
}
trait World{
    public function sayWorld()
    {
        echo "World";
    }
}
trait HelloWorld{
    use Hello, World;
}

class Test {
    use HelloWorld;
}

$world = new Test();
echo $world->sayHello() . " " . $world->sayWorld()
```

```php
/**
 * Trait conflict resolution
 */

trait testTrait1{
    public function sayHello()
    {
        echo "I'm from Test Trait 1. \n";
    }
}
trait testTrait2{
    public function sayHello()
    {
        echo "I'm from Test Trait 2. \n";
    }
}
class Test{
    use testTrait1, testTrait2{
        testTrait1:: sayHello insteadOf testTrait2;
        testTrait2:: sayHello as sayHello2;
    }
}
$obj = new Test();
$obj->sayHello();
$obj->sayHello2();
```
```php
/**
 * Trait static property and method
 */
trait Fruits{
    public $banana = 101;
    public $mango = 202;
    static public $apple = 301;
    public static function getMessage(){
        return self::$apple;
    }
}
class Test{
    use Fruits;
}
echo Test::$apple;
echo "\n";
echo Test::getMessage();
```
```php
/**
 * Trait abstract method
 */
trait testTrait{
    abstract function getMessage();
}
class Test{
    use testTrait;
    public function getMessage()
    {
        echo "Hello! I am abstract method. \n"; 
    }
}
$obj = new Test();
$obj->getMessage();
```

## Anonymouse Class
An anonymous class is a class without a declared name. 

```php
/***
 * Anonymous Class 
*/ 
$test = (new class {
    public function log(){
        echo "Hello! I'm anonymous class.";
    }
});
echo $test->log();
```
```php
/**
 * Anonymous class with arguments
 */
$msg = "Hello! I'm default arguments. \n";
$test = (new class($msg){
    public function log($msg){
        return $msg;
    }
});
echo $test->log("Hello! I'm anonymous class.");
```
```php
// __"Interface, trait, class" use in an anonymous class__
/**
 * interface
 */
interface testInterface{
    public function getMessage();
}
/**
 * Trait
 */
trait testTrait{
    public function sayHello(){
        return "Hello! I'm from trait. \n";
    }
}
/**
 * Class that will be extended
 */
class ParentClass{
    public function __construct($msg)
    {
        echo $msg;
    }
}

$msg = "This class extends ParentClass. \n";

$test = (new class ($msg) extends ParentClass implements testInterface{
    public function log($msg){
        return $msg;
    }
    public function getMessage()
    {
        return "I'm actually from interface. \n";
    }
    use testTrait;
});

echo $test->log("Hello! I'm anonymous class \n");
echo $test->getMessage();
echo $test->sayHello();
```