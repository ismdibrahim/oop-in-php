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

        function __call($name, $arguments)
        {
            if('run' == $name){
                if($arguments){
                    echo "I am running at {$arguments[0]} \n";
                }else{
                    echo "I am running \n";
                }
            }
        }

        static function __callStatic($name, $arguments)
        {
            echo "Static call \n";
        }



    }

    MotorCycle::wash();

    $pulser = new MotorCycle('150cc', '16ltr', '40kmph');
    $pulser->capacity = "20ltr \n";

    if (isset($pulser->tiresize)) {
        echo "Found \n";
    }else{
        echo "Not found \n"; 
    }

    unset($pulser->mileage);

    $pulser->run('100kmph');
?>