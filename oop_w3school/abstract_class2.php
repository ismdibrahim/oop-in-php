<?php

abstract class ParentClass{
    abstract protected function PrefixName($name);
}
class ChildClass extends ParentClass{
    public function PrefixName($name){
        if('John Doe' == $name){
            $prefix = "Mr.";
        }elseif("Jane Doe" == $name){
            $prefix = "Mrs.";
        }else{
            $prefix = "";
        }
        return "{$prefix} {$name}";
    }
}

$class = new childClass();
echo $class->PrefixName('Jane Doe');
?>