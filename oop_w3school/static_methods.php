<?php 
class A{
    protected static function welcome(){
        echo "Hello world!";
    }
}

class B extends A{
    public $name;
    function __construct()
    {
        $this->name = parent::welcome();
    }
}

$b = new B();
echo $b->name;

?>