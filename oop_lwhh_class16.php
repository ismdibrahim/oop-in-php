<?php 

class Student{
    private $name;
    private $age;
    private $class;

    public function __construct($name = '', $age = '', $class = '')
    {   
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    function __get($prop)
    {
        return $this->$prop;
    }
    function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    
}

$s = new Student("Ibrahim", "29", "20");
// $s->name = "Sharmin";
echo $s->name;



?>