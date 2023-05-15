<?php 
    class MotorCycle{
        private $parameters;
        function __construct($displacement, $capacity, $mileage)    
        {
            $this->parameters = [];
            $this->parameters['displacement'] = $displacement;
            $this->parameters['capacity'] = $capacity;
            $this->parameters['mileage']  =$mileage;
        }

        

        // function getDisplacement(){
        //     return $this->displacement;
        // }
        // function setDisplacement($displacement){
        //     $this->displacement = $displacement;
        // }

        function __get($name)
        {
            echo $this->parameters[$name];
        }
        function __set($name, $value)
        {
            echo $this->parameters[$name] = $value;
        }

        function __isset($name)
        {
            if (!isset($this->parameters[$name])) {
                echo "{$name} is not found \n";
                return false;
            }
            return true;
        }

        function __unset($name)
        {
            print_r($this->parameters);
            unset($this->parameters[$name]);
            print_r($this->parameters);
        }

    }

    $pulser = new MotorCycle('150cc', '16ltr', '40kmph');
    // echo $pulser->getDisplacement(); 
    $pulser->capacity = "20ltr";
    // echo $pulser->displacement;

    if (isset($pulser->tiresize)) {
        echo "Found";
    }else{
        echo "Not found"; 
    }

    unset($pulser->mileage);
?>