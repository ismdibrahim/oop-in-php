<?php 
// __Property Overload__
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

// __Property overload with isset__ 
// class PropertyOverload{
//     private $data = array();
//     public function __set($name, $value){
//         echo "Setting {$name} Property to {$value} \n";
//         $this->data[$name] = $value;
//     }
//     public function __get($name){
//         echo "Getting {$name} Property to value : ";
//         if(array_key_exists($name, $this->data)){
//             return $this->data[$name];
//         }
//     }
//     public function __isset($name)
//     {
//         echo "Is {$name} Property set? \n";
//         echo isset($this->data[$name])? "Yes {$name} Property is set":"No {$name} Property is not set";
//         echo "\n";
//     }
// }
// $obj = new PropertyOverload();
// $obj->a = "Ibrahim";
// echo $obj->a; 
// isset($obj->a);
// isset($obj->b);

// __Property Overload with isset unset__ 
// class PropertyOverload{
//     private $data = array();
//     public function __set($name, $value){
//         echo "Setting {$name} Property to {$value} \n";
//         $this->data[$name] = $value;
//     }
//     public function __get($name){
//         echo "Getting {$name} Property to value: ";
//         if(array_key_exists($name, $this->data)){
//             return $this->data[$name];
//         }
//     }
//     public function __isset($name)
//     {
//         echo "Is {$name} Property set? \n";
//         echo isset($this->data[$name])? "Yes {$name} property is set":"No property is not set \n";
//         echo "\n";
//     }
//     public function __unset($name)
//     {
//         echo "Unsetting {$name} \n";
//         unset($this->data[$name]);
//     }
// }
// $obj = new PropertyOverload();
// $obj->a = "Ibrahim";
// echo $obj->a;
// echo isset($obj->a);
// unset($obj->a);
// echo isset($obj->a);


// __Method Overloading__ 
// class MethodOverload{
//     public function __call($name, $arguments){
//         echo "Calling object method {$name}" . implode(", ", $arguments) . "\n";
//     }
//     public static function __callStatic($name, $arguments)
//     {
//         echo "Calling static method {$name}" . implode(", ", $arguments) . "\n";
//     }
// }
// $obj = new MethodOverload();
// $obj->runTest(" In object contect");
// MethodOverload::runTest(" In static context");


?>