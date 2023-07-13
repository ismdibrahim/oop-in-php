<?php 

// Method data display

class SimpleClass{
    public $var = "Hello Simple Class";
    public function display(){
        echo $this->var;
    }
}
$s = new SimpleClass();
$s->display();

// Static Property

class StaticProperty{
    static public $var = "Hello ";
    const a = "Bangladesh";

    public function display(){
        echo self::$var;
        echo self::a;
    }
}

$s = new StaticProperty();
$s->display();
echo "<br>". StaticProperty::$var;

// Static method

class StaticMethod{
    public $var = "Hello ";
    const a = "Bangladesh";

    public static function sayHello(){
        echo "Hello Bangladesh";
    }
}
StaticMethod::sayHello();
echo "<br> Constant = ". StaticMethod::a;
?>