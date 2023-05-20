<?php 
class PI{
    public static $value = "3.14159";
}

class X extends PI{
    public function getValue(){
        return parent::$value;
    }
}

echo X::$value. "\n";

$x = new X();
echo $x->getValue();
?>