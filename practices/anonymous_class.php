<?php 
// class Test{
//     public function log(){
//         echo "Hello! I'm normal class.";
//     }
// }
// $obj = new Test();
// $obj->log();

/***
 * Anonymous Class 
*/ 
// $test = (new class {
//     public function log(){
//         echo "Hello! I'm anonymous class.";
//     }
// });
// echo $test->log();

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
?>