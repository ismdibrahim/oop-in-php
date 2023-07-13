<?php 
// __Simple static method__

class greeting{
    public static function welcome(){
        echo "Welcome to our office.";
    }
}
greeting::welcome();

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
new greetng();

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
echo $obj->message();

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


?>