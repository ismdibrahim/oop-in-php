<?php 
    class Planet{
        public $name;
        function __construct($name){
            $this->name = $name;
        }
    }

    $p1 = new Planet("Mango");
    $p3 = $p1;
    $p2 = new Planet("Mango");

    if($p3 === $p1){
        echo "Similar Planets";
    }else{
        echo "Not Similar";
    }
?>