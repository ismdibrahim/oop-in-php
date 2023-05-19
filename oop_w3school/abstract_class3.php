<?php

abstract class ParentClass{
    abstract public function PrefixName($name);
}
class ChildClass  extends ParentClass{
    public function PrefixName($name, $separator = ".", $greet ="Dear"){
        if("John Doe" == $name){
            $prefix = "Mr";
        }elseif("Jane Doe" == $name){
            $prefix = "Mrs";
        }else{
            $prefix = "";
        }
        return "{$greet} {$prefix}{$separator} {$name}";
    }
}

$class = new ChildClass();
echo $class->PrefixName('Jane Doe');
?>